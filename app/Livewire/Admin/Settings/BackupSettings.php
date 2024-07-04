<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class BackupSettings extends Component
{
    use LivewireAlert;

    public
        $DROPBOX_TOKEN,
        $BACKUP_NAME;

    protected $listeners = ['reload' => '$refresh'];

    public function backup()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        Artisan::call("env:set DROPBOX_TOKEN='$this->DROPBOX_TOKEN'");
        Artisan::call("env:set BACKUP_NAME='$this->BACKUP_NAME'");
        $this->alertMessage();
    }
    public function mount()
    {
        // $this->DROPBOX_TOKEN = env('DROPBOX_TOKEN');
        $this->BACKUP_NAME = env('BACKUP_NAME');
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
        return view('livewire.admin.settings.backup-settings');
    }
}
