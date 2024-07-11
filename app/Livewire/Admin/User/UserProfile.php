<?php

namespace App\Livewire\Admin\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class UserProfile extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $photo;
    public $userAvatar; 
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->userAvatar = $user->profile_photo_path;
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'photo' => 'nullable|image|max:1024', // Validate the uploaded photo
        ]);
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'nullable|min:6|confirmed',
            'photo' => 'nullable|image|max:3072',
        ]);
        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        if (!empty($this->password)) {
            $user->password = Hash::make($this->password);
        }
        if ($this->photo) {
            // Delete the old photo if it exists
            if ($user->profile_photo_path) {
                Storage::delete($user->profile_photo_path);
            }

            // Store the new photo
            $this->userAvatar = $this->photo->store('profile-photos', 'public');
            $user->profile_photo_path = $this->userAvatar;
        }
        $user->save();
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Profile updated successfully.']);
        $this->alertMessage('success', 'Operation success', 'Profile updated successfully.');
        // session()->flash('message', 'Profile updated successfully.');

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
        $user = Auth::user();
        return view('livewire.admin.user.user-profile',['user'=> $user]);
    }
}
