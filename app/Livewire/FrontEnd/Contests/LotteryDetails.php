<?php

namespace App\Livewire\FrontEnd\Contests;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class LotteryDetails extends Component
{
    public function render()
    {
        return view('livewire.front-end.contests.lottery-details');
    }
}
