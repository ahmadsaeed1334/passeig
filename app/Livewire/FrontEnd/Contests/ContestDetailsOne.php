<?php

namespace App\Livewire\FrontEnd\Contests;

use Livewire\Component;
use App\Models\Giveaway;
use App\Models\User;
use App\Models\Wallet;
use App\Models\GiveawayEntry;
use Illuminate\Support\Facades\DB;
use App\Models\GiveawaySpecification;
use HPWebdeveloper\LaravelPayPocket\Facades\LaravelPayPocket;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.front')]
class ContestDetailsOne extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $giveaway;
    public $giveawayId;
    public $giveawaySpecifications;
    public $quantity = 1;
     public $totalFee ;
    public $errorMessage = '';
  
    public $walletType = 'personal';

    public function mount($giveawayId)
    {
        $this->load($giveawayId);
    }

    public function load($giveawayId)
    {
        $this->giveawayId = $giveawayId;
        $this->giveaway = Giveaway::findOrFail($giveawayId);
        $this->giveawaySpecifications = GiveawaySpecification::where('giveaway_id', $giveawayId)->get();
        $this->calculateTotalCost();
    }

    public function render()
    {
        $registeredUserss = GiveawayEntry::select('users.name', 'users.id', DB::raw('count(*) as entry_count'))
            ->join('users', 'users.id', '=', 'giveaway_entries.user_id')
            ->where('giveaway_entries.giveaway_id', $this->giveawayId)
            ->groupBy('users.name', 'users.id')
            ->orderBy('entry_count', 'desc')
            ->limit(6)->get();
        return view(
            'livewire.front-end.contests.contest-details-one',
            [
                'giveaway' => $this->giveaway,
                'giveawaySpecifications' => $this->giveawaySpecifications,
                'giveawayId' => $this->giveawayId,
                'registeredUserss' => $registeredUserss,
                'quantity' => $this->quantity,
                
            ]
        );
    }

  
    public function updatedQuantity()
    {
        $this->validateOnly('quantity', [
            'quantity' => 'required|integer|min:1|max:100',
        ]);
        $this->calculateTotalCost();
    }

    public function calculateTotalCost()
    {
        $this->totalFee = $this->giveaway->fee * $this->quantity;
    }
    public function buyTickets()
    {
        $this->dispatch('loading');
        $this->validate([
            'quantity' => 'required|integer|min:1|max:100'
        ]);
        if (!auth()->check()) {
            $this->dispatch('showAlert', ['type' => 'error', 'message' => 'You must be logged in to purchase tickets.']);
            $this->alertMessage('error', 'Operation failed', 'You must be logged in to purchase tickets.');
            return $this->load($this->giveawayId);
        }
    
        $user = auth()->user();
        $this->giveaway = Giveaway::find($this->giveawayId);
    
        if (!$this->giveaway) {
            $this->dispatch('showAlert', ['type' => 'error', 'message' => 'The requested giveaway does not exist.']);
            $this->alertMessage('error', 'Operation failed', 'The requested giveaway does not exist.');
            return;
        }
        $wallets = $user->wallet()->whereIn('type', ['wallet_1', 'wallet_2'])->get();
        $personalWallet = $wallets->where('type', 'wallet_2')->first();
        $businessWallet = $wallets->where('type', 'wallet_1')->first();
    
        $totalFee = $this->giveaway->fee * $this->quantity;
    
    if ($this->walletType === 'personal' && ($personalWallet && $personalWallet->balance < $totalFee)) {
        $this->dispatch('showAlert', ['type' => 'error', 'message' => 'Insufficient funds in your personal wallet. Please add funds or select the business wallet.']);
        $this->alertMessage('error', 'Operation failed', 'Insufficient funds in your personal wallet. Please add funds or select the business wallet.');
        return;
    } elseif ($this->walletType === 'business' && ($businessWallet && $businessWallet->balance < $totalFee)) {
        $this->dispatch('showAlert', ['type' => 'error', 'message' => 'Insufficient funds in your business wallet. Please add funds or select the personal wallet.']);
        $this->alertMessage('error', 'Operation failed', 'Insufficient funds in your business wallet. Please add funds or select the personal wallet.');
        return;
    }
        
        DB::beginTransaction();
    
        try {
            // Deduct the amount from the selected wallet
            if ($this->walletType === 'personal' && $personalWallet) {
                $personalWallet->decrement('balance', $totalFee);
            } elseif ($businessWallet) {
                $businessWallet->decrement('balance', $totalFee);
            } else {
                throw new \Exception('Business wallet not found.');
            }
            Log::info('Quantity: ' . $this->quantity);
            for ($i = 0; $i < $this->quantity; $i++) {
                // Debug: log each iteration
                Log::info('Creating entry ' . ($i + 1) . ' for user ' . $user->id);

                $entry = new GiveawayEntry();
                $entry->giveaway_id = $this->giveawayId;
                $entry->user_id = $user->id;
                $entry->save();
            }
    
          // Record multiple ticket entries
            // for ($i = 0; $i < $this->quantity; $i++) {
            //     $entry = new GiveawayEntry();
            //     $entry->giveaway_id = $this->giveawayId;
            //     $entry->user_id = $user->id;
            //     $entry->save();
            // }
            // for ($i = 0; $i < $this->quantity; $i++) {
            //     GiveawayEntry::create([
            //         'giveaway_id' => $this->giveawayId,
            //         'user_id' => $user->id,
            //     ]);
            // }
    
            DB::commit();
    
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Ticket(s) purchased successfully!']);
            $this->alertMessage('success', 'Operation success', 'Ticket(s) purchased successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            $this->dispatch('showAlert', ['type' => 'error', 'message' => 'An error occurred while processing your request. Please try again.']);
            $this->alertMessage('error', 'Operation failed', 'An error occurred while processing your request. Please try again.');
            $this->dispatch('loaded'); 
            return;
        }
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
    
    

}
