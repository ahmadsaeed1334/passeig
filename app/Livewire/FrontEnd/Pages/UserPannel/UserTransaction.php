<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use App\Models\GiveawayEntry;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class UserTransaction extends Component
{
    public $personalWalletBalance;
    public $businessWalletBalance;
    public $userEntries = [];

    // public function mount()
    // {
    //     $user = auth()->user();
    //     if ($user) {
    //         // Retrieve the personal wallet balance for the logged-in user
    //         $this->personalWalletBalance = $user->wallet()->where('type', 'wallet_2')->value('balance');
            
    //         // Retrieve the business wallet balance for the logged-in user
    //         $this->businessWalletBalance = $user->wallet()->where('type', 'wallet_1')->value('balance');

    //         // Retrieve the user's entries for each giveaway
    //         $giveaways = $user->giveaway()->with(['entries' => function ($query) {
    //             $query->select('giveaway_entries.*', 'amount')
    //                 ->leftJoin('transactions', 'transactions.id', '=', 'giveaway_entries.transaction_id');
    //         }])->get();

    //         foreach ($giveaways as $giveaway) {
    //             $this->userEntries[$giveaway->id] = $giveaway->entries;
    //         }
    //     }
    // }
    public function mount()
{
    $user = auth()->user();
    if ($user) {
        // Retrieve the personal wallet balance for the logged-in user
        $this->personalWalletBalance = $user->wallet()->where('type', 'wallet_2')->value('balance');
        
        // Retrieve the business wallet balance for the logged-in user
        $this->businessWalletBalance = $user->wallet()->where('type', 'wallet_1')->value('balance');

        // Retrieve the user's entries for each giveaway along with the giveaway fee
        $entries = GiveawayEntry::where('user_id', $user->id)->with('giveaway')->get();

        foreach ($entries as $entry) {
            $giveawayId = $entry->giveaway_id;
            $giveawayFee = $entry->giveaway->fee;
            if (!isset($this->userEntries[$giveawayId])) {
                $this->userEntries[$giveawayId] = [];
            }
            $this->userEntries[$giveawayId][] = [
                'fee' => $giveawayFee,
                'entry' => $entry,
            ];
        }
    }
}

    public function render()
    {
        return view('livewire.front-end.pages.user-pannel.user-transaction', [
            'personalWalletBalance' => $this->personalWalletBalance,
            'businessWalletBalance' => $this->businessWalletBalance,
            'userEntries' => $this->userEntries,
        ]);
    }
}
