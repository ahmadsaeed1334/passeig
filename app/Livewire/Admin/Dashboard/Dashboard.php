<?php

namespace App\Livewire\Admin\Dashboard;

use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Access\Response;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Dashboard extends Component
{
    use LivewireAlert;

    public $message = null;

    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        // abort_if(Gate::denies('admin dashboard'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        ini_set('memory_limit', '-1');
        return view(
            'livewire.admin.dashboard.dashboard'
        );
    }
}
