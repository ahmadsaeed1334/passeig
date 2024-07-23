<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Attributes\Layout;
#[Layout('layouts.profile')]
class ProfileEdit extends Component
{
    use WithFileUploads, LivewireAlert ;

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $profile_photo;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function updateProfile()
    {
        $user = Auth::user();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:10',
            'password' => 'nullable|string|min:8|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
        ]);

        if ($this->profile_photo) {
            $profilePhotoPath = $this->profile_photo->store('profile_photos', 'public');
            $user->profile_photo_path = $profilePhotoPath;
        }

        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

       $this->alert('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.front.profile-edit');
    }
}
