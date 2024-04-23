<?php

namespace App\Livewire\FrontEnd\Contests;

use App\Models\GiveawayEntry;
use Livewire\Component;
use Illuminate\Support\Facades\DB; 
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Leaderboard extends Component
{
    use WithPagination;
    public $perPage = 5;
    public function render()
    {
        $registeredUserss = GiveawayEntry::select('users.name', 'users.id', DB::raw('count(*) as entry_count'))
        ->join('users', 'users.id', '=', 'giveaway_entries.user_id')
        ->where('giveaway_entries.giveaway_id', $this->giveawayId)
        ->groupBy('users.name', 'users.id')
        ->orderBy('entry_count', 'desc')
        ->paginate($this->perPage);
        return view('livewire.front-end.contests.leaderboard',[
        'registeredUserss' => $registeredUserss,]);
    }
}
