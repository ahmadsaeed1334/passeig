<?php

namespace App\Livewire\FrontEnd\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginModal extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Logged in successfully!');
            return redirect()->to('/'); // Redirect to dashboard after successful login
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }
    public function render()
    {
        return view('livewire.front-end.partial.login-modal');
    }
}
