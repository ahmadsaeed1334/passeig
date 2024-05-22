<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class TokensSettings extends Component
{
    use LivewireAlert;

    public
        $SLACK_WEBHOOK_URL;

    protected $listeners = ['reload' => '$refresh'];

    public function tokens()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        Artisan::call("env:set SLACK_WEBHOOK_URL='$this->SLACK_WEBHOOK_URL'");
        $this->alertMessage('success', 'Operation success',
        'some operations are Not allowed in demo mode');

    }

    public function mount()
    {
        // $this->SLACK_WEBHOOK_URL = env('SLACK_WEBHOOK_URL');
        // $this->PREQUEL_ENABLED = env('PREQUEL_ENABLED');
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
        return view('livewire.admin.settings.tokens-settings');
    
    }
}
