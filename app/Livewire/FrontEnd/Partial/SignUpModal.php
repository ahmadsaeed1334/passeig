<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class SignUpModal extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    public function signUp()
    {
        
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'user_type' => 1,
        ]);
        session(['user_name' => $this->name]);
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.front-end.partial.sign-up-modal');
    }
}
