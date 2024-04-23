<?php

namespace App\Livewire\Admin\Settings;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class CopyRightsSettings extends Component
{
    use LivewireAlert;

    public $copy_right,
        $copy_right_url;

    protected $listeners = ['reload' => '$refresh'];

    public function copy_right()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        setting([
            'copy_right' => $this->copy_right,
            'copy_right_url' => $this->copy_right_url
        ])->save();
        $this->alert('success', 'Settings Saved Successfuly!', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
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

    public function mount()
    {
        $this->copy_right = setting('copy_right');
        $this->copy_right_url = setting('copy_right_url');
    }

    public function render()
    {
        return view('livewire.admin.settings.copy-rights-settings');
    }
}
