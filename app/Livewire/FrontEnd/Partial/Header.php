<?php

namespace App\Livewire\FrontEnd\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }
    public function render()
    {
        return view('livewire.front-end.partial.header');
    }
}
