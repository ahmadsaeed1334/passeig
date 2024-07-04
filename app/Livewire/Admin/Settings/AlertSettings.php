<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class AlertSettings extends Component
{
    use LivewireAlert;

    public $title,
        $message,
        $position,
        $timer,
        $background;

    protected $listeners = ['reload' => '$refresh'];

    public function alert_settings()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        setting([
            'alert.title' => $this->title,
            'alert.message' => $this->message,
            'alert.position' => $this->position,
            'alert.timer' => $this->timer,
            'alert.background' => $this->background
        ])->save();
        $this->dispatch('refreshPhoto');
        $this->alertMessage();
    }

    public function mount()
    {
        $this->title = alert('title');
        $this->message = alert('message');
        $this->position = alert('position');
        $this->timer = alert('timer');
        $this->background = alert('background');
    }

    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => alert('background'),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.settings.alert-settings');
    }
}
