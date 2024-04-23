<?php

namespace App\Livewire\Admin\Partial;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Control extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $command, $commandRun, $app_debug;

    public $photo, $authUser, $color;

    protected $listeners = ['refreshPhoto' => '$refresh', 'reload' => '$refresh'];


    public function updatedColor()
    {
        // dispatch(function () {
        ini_set('memory_limit', '-1');
        setting([
            'general_settings.primary_color' => $this->color
        ])->save();
        $this->dispatch('reload');
        $this->alertMessage();
    }

    public function updatedAppDebug()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        if ($this->app_debug) {
            custom_command("env:set APP_DEBUG=\"true\"");
        } else {
            custom_command("env:set APP_DEBUG=\"false\"");
        }
        $this->alertMessage();
    }

    public function updatedCommandRun()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        // dispatch(function () {
        ini_set('memory_limit', '-1');
        $status = custom_command($this->commandRun);
        // })->delay(now());
        $this->alertMessage();
        $this->alertMessage($status ? 'success' : 'error', $status ? "Operation succeeded" : 'Operation failed', $status ? $this->commandRun . ' Command Run Successfully!' : $this->commandRun . ' Command Not found');
        $this->commandRun = null;
    }

    public function custom_command()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate(
            [
                'command' => 'required',
            ],
            [
                'command.required' => 'The :attribute cannot be empty.',
            ],
            [
                'command' => 'Command',
            ]
        );
        // dispatch(function () {
        ini_set('memory_limit', '-1');
        $status = custom_command($this->command);
        // })->delay(now());
        $this->command = null;
        $this->alertMessage($status ? 'success' : 'error', $status ? "Operation succeeded" : 'Operation failed', $status ? 'Command Run Successfully!' : 'Command Not found');
    }

    public function mount()
    {
        $this->app_debug = env('APP_DEBUG');
        $this->color = setting('general_settings.primary_color');
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
        return view('livewire.admin.partial.control');
    }
}
