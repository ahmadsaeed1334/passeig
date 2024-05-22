<?php

namespace App\Livewire\Admin\WalletManager;

use Livewire\Component;
use HPWebdeveloper\LaravelPayPocket\Facades\LaravelPayPocket;
use App\Models\User;
use App\Models\Giveaway;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class WalletManager extends Component
{
    use LivewireAlert;
    public $assignedUserId;
    public $userId;
    public $amount;
    public $walletType;
    public $notes;
    public $selectedUserId;
    public $personalWalletBalance;
    public $businessWalletBalance;

    public function mount()
    {
        $this->userId = auth()->user()->id;
    }

    public function create()
    {
        $user = auth()->user();
        if ($user && $this->amount > 0) {
            LaravelPayPocket::deposit($user, 'wallet_2', $this->amount, $this->notes);
        }
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Create Coins added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Create Coins added successfully!');
    }

    public function walletAssignUser()
    {
        $this->validate([
            'assignedUserId' => 'required',
            'amount' => 'required|numeric|min:0',
            'walletType' => 'required|in:business,personal',
        ]);

        $user = auth()->user();

        if ($user && $this->amount > 0) {
            $assignedUser = User::find($this->assignedUserId);

            if ($assignedUser) {
                // $walletType = $this->walletType == 'business' ? 'business' : 'personal';
                $walletType = $this->walletType;
                if ($walletType === 'business') {
                    LaravelPayPocket::deposit($assignedUser, 'wallet_1', $this->amount, $this->notes);
                    // Replace 'wallet_1' with the appropriate business wallet identifier
                } else {
                    LaravelPayPocket::deposit($assignedUser, 'wallet_2', $this->amount, $this->notes);
                    // Replace 'wallet_2' with the appropriate personal wallet identifier
                }
                // LaravelPayPocket::deposit($assignedUser, $walletType, $this->amount, $this->notes);
            }
        }

        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Coins assigned successfully!']);
        $this->alertMessage('success', 'Operation success',
        'Coins assigned successfully!');
   
    }
    public function getUserAmount($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $this->notes = $user->wallet->balance;
        }
        $this->userId = $userId;
        $this->dispatch('show-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Assign Coins added successfully!']);
        $this->alertMessage('success', 'Operation success',
        'Assign Coins added successfully!');
        $this->resetFields();
    }

    public function walletDeductUser()
    {
        $this->validate([
            'selectedUserId' => 'required',
            'amount' => 'required|numeric|min:0',
            'walletType' => 'required|in:business,personal',
        ]);
    
        $selectedUser = User::find($this->selectedUserId);
    
        if ($selectedUser) {
            $walletType = $this->walletType;
    
            if ($walletType === 'business') {
                $walletIdentifier = 'wallet_1';
            } else {
                $walletIdentifier = 'wallet_2';
            }
    
            $walletBalance = $selectedUser->wallet()->where('type', $walletIdentifier)->value('balance');
    
            if ($walletBalance >= $this->amount) {
                $selectedUser->wallet()->where('type', $walletIdentifier)->decrement('balance', $this->amount);
                $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Amount deducted successfully from the selected user\'s wallet.']);
            } else {
                $this->dispatch('showAlert', ['type' => 'error', 'message' => 'Insufficient funds in the user\'s wallet.']);
            }
        } else {
            $this->dispatch('showAlert', ['type' => 'error', 'message' => 'Selected user not found.']);
        }
    
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Amount deducted successfully from the selected user\'s wallet.']);
        $this->alertMessage('success', 'Operation success', 'Amount deducted successfully from the selected user\'s wallet.');
    }
    
    public function resetFields()
    {
        $this->amount = "";
        $this->notes = "";
    }
  
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => alert('background'),
        ]);
    }
    public function discardChanges()
    {
        $this->resetFields();
        $this->dispatch('hide-modal');
    }

    public function render()
    {
        // $users = User::has('wallet')->with('wallet')->get();
        $users = User::whereHas('wallet')->with('wallet')->get();
        $userss = User::all();

        $userBalances = [];
        foreach ($users as $user) {
            $personalWallet = $user->wallet()->where('type', 'wallet_2')->first();
            $businessWallet = $user->wallet()->where('type', 'wallet_1')->first();

            $userBalances[$user->id] = [
                'wallet_2' => $personalWallet ? $personalWallet->balance : 0,
                'wallet_1' => $businessWallet ? $businessWallet->balance : 0,
            ];
        }

        return view('livewire.admin.wallet-manager.wallet-manager', [
            'users' => $users,
            'userss' => $userss,
            'userBalances' => $userBalances,
        ]);
    }
}
