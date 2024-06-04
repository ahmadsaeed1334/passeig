<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class SignUpModal extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $verification_code;
    public $showVerificationModal = false;
    public $user;
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|confirmed|min:8',
    ];
    // public function signUp()
    // {
    //     // Validate the sign-up form
    //     $validatedData = $this->validate();
    //     // Generate a new verification code
    //     $verification_code = rand(100000, 999999);
    //     $this->user = User::create([
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'password' => bcrypt($this->password),
    //         'user_type' => 1,
    //         'verification_code' => $verification_code,
    //     ]);
    //     event(new Registered($this->user));
    //     Mail::to($this->user->email)->queue(new VerificationCodeMail($verification_code));
    //     $this->showVerificationModal = true;
    //     $this->dispatch('sign-up-modal');
    // }
    // public function verifyCode()
    // {
    //     $this->validate([
    //         'verification_code' => 'required|numeric',
    //     ]);

    //     if ($this->user->verification_code == $this->verification_code) {
    //         $this->user->email_verified_at = now();
    //         $this->user->save();
    //         Auth::login($this->user);
    //         return redirect()->to('/');
    //     } else {
    //         session()->flash('error', 'Invalid verification code.');
    //     }
    // }
    public function signUp()
    {
        
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'user_type' => 1,
        ]);
        session(['user_name' => $this->name]);
        if ($user) {
            Auth::login($user);
            session(['user_name' => $this->name]);
            return redirect()->to('/');
        }
        session()->flash('error', 'Something went wrong.');
    }
    public function render()
    {
        return view('livewire.front-end.partial.sign-up-modal');
    }
}
