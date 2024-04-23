<?php

namespace App\Livewire\FrontEnd\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class TermsCondition extends Component
{
    public function render()
    {
        return view('livewire.front-end.pages.terms-condition');
    }
}
