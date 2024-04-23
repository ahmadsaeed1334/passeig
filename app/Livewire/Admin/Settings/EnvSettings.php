<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class EnvSettings extends Component
{
    use LivewireAlert;

    public $APP_ENV,
        $APP_DEBUG,
        $APP_URL;

    protected $listeners = ['reload' => '$refresh'];

    public function app_env()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        Artisan::call("env:set APP_ENV='$this->APP_ENV'");
        Artisan::call("env:set APP_DEBUG='$this->APP_DEBUG'");
        Artisan::call("env:set APP_URL='$this->APP_URL'");
        $this->alertMessage();
    }

    public function mount()
    {
        $this->APP_ENV = env('APP_ENV');
        $this->APP_DEBUG = env('APP_DEBUG');
        $this->APP_URL = env('APP_URL');
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
        return view('livewire.admin.settings.env-settings');
    }
}
