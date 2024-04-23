<?php

namespace App\Livewire\Admin\Logs;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class LogViewer extends Component
{
    public function render()
    {
        return view('livewire.admin.logs.log-viewer');
    }
}
