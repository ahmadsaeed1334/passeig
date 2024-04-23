<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Winner extends Component
{
    public function render()
    {
        return view('livewire.front-end.partial.winner');
    }
}
