<?php

namespace App\Livewire\Admin\Settings;

use App\Mail\TestEmail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class MailSettings extends Component
{
    use LivewireAlert;

    public   $MAIL_MAILER,
        $MAIL_HOST,
        $MAIL_PORT,
        $MAIL_USERNAME,
        $MAIL_PASSWORD,
        $MAIL_ENCRYPTION;

    public $email;

    protected $listeners = ['reload' => '$refresh'];

    public function sendEmail()
    {
        // Validate the email address
        $this->validate([
            'email' => 'required|email',
        ]);

        try {
            // Send the email
            Mail::to($this->email)->send(new TestEmail());

            // Reset the input field
            $this->email = '';

            // Show a success message
            $this->alertMessage(null, null, 'Email sent successfully.');
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            $this->alertMessage('error', 'Operation Failed', $e->getMessage());
        }

        // Reset the input field
        $this->email = '';
    }

    public function email_settings()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        Artisan::call("env:set MAIL_MAILER='$this->MAIL_MAILER'");
        Artisan::call("env:set MAIL_HOST='$this->MAIL_HOST'");
        Artisan::call("env:set MAIL_PORT='$this->MAIL_PORT'");
        Artisan::call("env:set MAIL_USERNAME='$this->MAIL_USERNAME'");
        Artisan::call("env:set MAIL_PASSWORD='$this->MAIL_PASSWORD'");
        Artisan::call("env:set MAIL_ENCRYPTION='$this->MAIL_ENCRYPTION'");
        $this->alertMessage();
    }

    public function mount()
    {
        $this->MAIL_MAILER = env('MAIL_MAILER');
        $this->MAIL_HOST = env('MAIL_HOST');
        $this->MAIL_PORT = env('MAIL_PORT');
        // $this->MAIL_USERNAME = env('MAIL_USERNAME');
        // $this->MAIL_PASSWORD = env('MAIL_PASSWORD');
        $this->MAIL_ENCRYPTION = env('MAIL_ENCRYPTION');
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
        return view('livewire.admin.settings.mail-settings');
    }
}
