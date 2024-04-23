<?php

namespace App\Livewire\FrontEnd\Contact;

use App\Models\Support;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Contact extends Component
{
    public function render()
    {
        $supports = Support::all();
        return view('livewire.front-end.contact.contact',
    compact('supports'));
    }
}
