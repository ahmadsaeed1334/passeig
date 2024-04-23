<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ConnectionSettings extends Component
{
    use LivewireAlert;

    public $DB_CONNECTION,
        $DB_HOST,
        $DB_PORT,
        $DB_DATABASE,
        $DB_USERNAME,
        $DB_PASSWORD;

    protected $listeners = ['reload' => '$refresh'];

    public function db_connection()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        Artisan::call("env:set DB_CONNECTION='$this->DB_CONNECTION'");
        Artisan::call("env:set DB_HOST='$this->DB_HOST'");
        Artisan::call("env:set DB_PORT='$this->DB_PORT'");
        Artisan::call("env:set DB_DATABASE='$this->DB_DATABASE'");
        Artisan::call("env:set DB_USERNAME='$this->DB_USERNAME'");
        Artisan::call("env:set DB_PASSWORD='$this->DB_PASSWORD'");
        $this->alertMessage();
    }

    public function mount()
    {
        $this->DB_CONNECTION = env('DB_CONNECTION');
        $this->DB_HOST = env('DB_HOST');
        $this->DB_PORT = env('DB_PORT');
        $this->DB_DATABASE = env('DB_DATABASE');
        // $this->DB_USERNAME = env('DB_USERNAME');
        // $this->DB_PASSWORD = env('DB_PASSWORD');
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
        return view('livewire.admin.settings.connection-settings');
    }
}
