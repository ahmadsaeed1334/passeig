<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.front')]
class UserReferral extends Component
{

    public $recipientEmail;
    public $amount;
    public $amountToShare;
    public $selectedWallet = 'wallet_2'; // Default to Business Wallet
    use LivewireAlert;
    protected $rules = [
        'recipientEmail' => 'required|email',
        'amount' => 'required|numeric|min:100',
        'selectedWallet' => 'required|in:business,personal', // Ensure selected wallet is either business or personal
    ];

    protected $messages = [
        'amount.min' => 'The minimum sharing amount is 100. Please enter an amount equal to or greater than 100.',
    ];

    public function shareBalance()
    {
        $this->validate();

        $sender = Auth::user();
        $recipient = User::where('email', $this->recipientEmail)->first();

        if ($recipient) {
            $walletType = $this->selectedWallet === 'business' ? 'wallet_1' : 'wallet_2';
            $senderWallet = $sender->wallets()->where('type', $walletType)->first();

            if ($senderWallet && $senderWallet->balance >= $this->amount) {
                $senderWallet->decrement('balance', $this->amount);

                $recipientWallet = $recipient->wallets()->where('type', $walletType)->first();
                if ($recipientWallet) {
                    $recipientWallet->increment('balance', $this->amount);
                } else {
                    $recipient->wallets()->create([
                        'type' => $walletType,
                        'balance' => $this->amount,
                        'owner_type' => User::class,
                        'owner_id' => $recipient->id,
                    ]);
                }

                $this->resetFields();
                $this->dispatchBrowserEvent('showAlert', ['type' => 'success', 'message' => 'Balance shared successfully!']);
                $this->alertMessage('success', 'Operation success', 'Balance shared successfully!');
            } else {
                $this->resetFields();
                $this->dispatchBrowserEvent('showAlert', ['type' => 'error', 'message' => 'Insufficient funds in your selected wallet.']);
                $this->alertMessage('error', 'Operation failed', 'Insufficient funds in your selected wallet.');
            }
        } else {
            $this->resetFields();
            $this->dispatchBrowserEvent('showAlert', ['type' => 'error', 'message' => 'Recipient not found.']);
            $this->alertMessage('error', 'Operation failed', 'Recipient not found.');
        }
    }

    public function resetFields()
    {
        $this->recipientEmail = '';
        $this->amount = '';
        $this->selectedWallet = 'business'; 
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $backgroundColors = [
            'success' => '#00FF00',
            'error' => '#dc3545',
            'warning' => '#ffc107',
        ];
        $backgroundColor = $type ? $backgroundColors[$type] ?? alert('background') : alert('background');

        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => $backgroundColor,
        ]);
    }
    public function render()
    {
        return view('livewire.front-end.pages.user-pannel.user-referral');
    }
}
