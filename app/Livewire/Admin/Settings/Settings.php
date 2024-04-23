<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Settings extends Component
{
    use LivewireAlert;

    protected $listeners = ['reload' => '$refresh'];

    public $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        // abort_if(Gate::denies('manage settings'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('livewire.admin.settings.settings');
    }
} 
