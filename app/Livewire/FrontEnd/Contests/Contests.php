<?php

namespace App\Livewire\FrontEnd\Contests;

use App\Models\ContestCard;
use Livewire\Component;
use App\Models\Giveaway ;
use App\Models\GiveawayEntry;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Contests extends Component
{

    public function render()
    {
        $giveaways = Giveaway::all();
       
        $contestCards = ContestCard::all();
        return view('livewire.front-end.contests.contests', ['giveaways'=> $giveaways, 'contestCards'=> $contestCards]);
    }
}
