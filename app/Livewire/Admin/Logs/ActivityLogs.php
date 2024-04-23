<?php

namespace App\Livewire\Admin\Logs;

use Livewire\Component;
use Spatie\Activitylog\Models\Activity;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ActivityLogs extends Component
{
    public function render()
    {
        $activities = Activity::all();
        return view('livewire.admin.logs.activity-logs');
    }
}
