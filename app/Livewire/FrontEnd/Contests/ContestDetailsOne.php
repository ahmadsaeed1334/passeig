<?php

namespace App\Livewire\FrontEnd\Contests;

use Livewire\Component;
use App\Models\Giveaway;
use App\Models\GiveawayEntry;
use Illuminate\Support\Facades\DB; 
use App\Models\GiveawaySpecification;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
#[Layout('layouts.front')]
class ContestDetailsOne extends Component
{
    use WithPagination;
    protected $giveaway;
    public $giveawayId;
    protected $giveawaySpecifications;
        public function mount($giveawayId)
    {
        $this->giveawayId = $giveawayId;
        $this->giveaway = Giveaway::findOrFail($giveawayId);
        $this->giveawaySpecifications = GiveawaySpecification::where('giveaway_id', $giveawayId)->get();

    }
   
    public function render() {
         $registeredUserss = GiveawayEntry::select('users.name', 'users.id', DB::raw('count(*) as entry_count'))
            ->join('users', 'users.id', '=', 'giveaway_entries.user_id')
            ->where('giveaway_entries.giveaway_id', $this->giveawayId)
            ->groupBy('users.name', 'users.id')
            ->orderBy('entry_count', 'desc')
            ->limit(6)->get();
         return view('livewire.front-end.contests.contest-details-one', 
         [ 'giveaway' => $this->giveaway ,
           'giveawaySpecifications' => $this->giveawaySpecifications,
           'giveawayId' => $this->giveawayId,
           'registeredUserss' => $registeredUserss,]);
         }
   
}
