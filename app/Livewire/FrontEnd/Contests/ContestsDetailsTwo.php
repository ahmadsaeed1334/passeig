<?php

namespace App\Livewire\FrontEnd\Contests;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class ContestsDetailsTwo extends Component
{
    public function render()
    {
        return view('livewire.front-end.contests.contests-details-two');
    }
}
