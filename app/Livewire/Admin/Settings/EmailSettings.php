<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class EmailSettings extends Component
{
    use LivewireAlert;

    public $from_email,
        $from_name,
        $reply_to_email,
        $reply_to_name;

    protected $listeners = ['reload' => '$refresh'];

    public function email()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        setting([
            'general_settings.from_name' => $this->from_name,
            'general_settings.from_email' => $this->from_email,
            'general_settings.reply_to_name' => $this->reply_to_name,
            'general_settings.reply_to_email' => $this->reply_to_email,
        ])->save();
        Artisan::call("env:set MAIL_FROM_ADDRESS='$this->from_email'");
        $this->dispatch('refreshPhoto');
        $this->alertMessage();
    }

    public function mount()
    {
        // Email Settings
        $this->from_name = general('from_name');
        $this->from_email = general('from_email');
        $this->reply_to_name = general('reply_to_name');
        $this->reply_to_email = general('reply_to_email');
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
        return view('livewire.admin.settings.email-settings');
    }
}
