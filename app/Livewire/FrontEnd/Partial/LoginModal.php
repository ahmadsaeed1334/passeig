<?php

namespace App\Livewire\FrontEnd\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class LoginModal extends Component
{
    use LivewireAlert;
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // session()->flash('message', 'Logged in successfully!');
            return redirect()->to('/');
            $this->alertMessage('success', 'Operation success', 'Logged in successfully!');

        } else {
            $this->alertMessage('error', 'Operation failed', 'Invalid credentials. Please try again.');

        }
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
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
    public function render()
    {
        return view('livewire.front-end.partial.login-modal');
    }
}
