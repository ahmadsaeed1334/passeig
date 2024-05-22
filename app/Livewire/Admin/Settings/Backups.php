<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Symfony\Component\HttpFoundation\Response;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Backups extends Component
{
    use LivewireAlert;

    protected $listeners = ['reload' => '$refresh'];

    public function cleanBackup()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        dispatch(
            function () {
                ini_set('memory_limit', '-1');
                backup_clean();
            }
        )->delay(now());
        $this->alertMessage('success', 'Operation success',
        'Backup Cleared Successfully!');
  
    }

    public function runBackup()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        dispatch(
            function () {
                ini_set('memory_limit', '-1');
                backup_run();
            }
        )->delay(now());
        $this->alertMessage('success', 'Operation success',
        'Backup Run Successfully!'
    );
    }

    public function deleteDropBox($file)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        return
            Storage::disk('dropbox')->delete($file);
    }

    public function downloadDropBox($file)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        return
            Storage::disk('dropbox')->download($file);
    }

    public function delete($file)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        return
            Storage::disk('local')->delete($file);
    }

    public function download($file)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        return
            Storage::disk('local')->download($file);
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
        // abort_if(Gate::denies('manage backups'), Response::HTTP_FORBIDDEN, '403 Forbidden');s
        $files = Storage::disk('local')->files(env('BACKUP_NAME'));
        if (env('BACKUP_NAME'))
            $dropBoxFiles = Storage::disk('dropbox')->files(env('BACKUP_NAME'));
        else
            $dropBoxFiles = [];
        // dd($dropBoxFiles);
        return view('livewire.admin.settings.backups', ['files' => $files, 'dropBoxFiles' => $dropBoxFiles]);
    }
}
