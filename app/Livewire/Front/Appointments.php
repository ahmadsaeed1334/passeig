<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Appointments extends Component
{
    public function render()
    {
        return view('livewire.front.appointments');
    }
}
