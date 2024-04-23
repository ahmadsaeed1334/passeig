<?php

namespace App\Livewire\Admin\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class QuickPanel extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        
        return view('livewire.admin.partial.quick-panel');
    }
}
