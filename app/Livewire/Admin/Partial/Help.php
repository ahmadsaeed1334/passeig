<?php

namespace App\Livewire\Admin\Partial;

use Livewire\Component;

class Help extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        return view('livewire.admin.partial.help');
    }
}
