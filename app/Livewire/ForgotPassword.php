<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class ForgotPassword extends Component
{
    public $email;

    public function sendResetLink()
    {
        $this->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('status', __($status));
            $this->alertMessage('success', 'Operation success', 'A reset link has been sent to your email address.');
        } else {
            $this->addError('email', __($status));
            $this->alertMessage('error', 'Operation success', 'Unable to send reset link.');

        }
    }
    public function render()
    {
        return view('livewire.forgot-password');
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        // Define an array mapping alert types to background colors
        $backgroundColors = [
            'success' => '#00FF00',  
            'error' => '#dc3545',  
            'warning' => '#ffc107',  
        ];
        $backgroundColor = $type ? $backgroundColors[$type] ?? alert('background') : alert('background');
    
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => $backgroundColor,
        ]);
    }
}
