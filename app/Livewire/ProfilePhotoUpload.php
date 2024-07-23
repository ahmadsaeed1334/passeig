<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\Massage;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
#[Layout('layouts.profile')]
class ProfilePhotoUpload extends Component
{
    use WithFileUploads,LivewireAlert;

    public $profilePhoto;

    public function updatedProfilePhoto()
    {
        $this->validate([
            'profilePhoto' => 'image|max:2048', // 2MB Max
        ]);

        $user = Auth::user();
        $path = $this->profilePhoto->store('profile-photos', 'public');
        $user->update(['profile_photo_path' => $path]);

        $photoUrl = asset('storage/' . $path);
        $this->dispatch('profilePhotoUpdated', $photoUrl);

        $this->alert('success', 'Profile photo updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile-photo-upload');
    }
}
