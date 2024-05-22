<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
#[Layout('layouts.front')]
class UserProfile extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $photo;
    public $name;
    public $userAvatar; 

    public function mount()
    {
        // $user = Auth::user();
        $user = User::findOrFail(auth()->id());
        $this->name = $user->name;

        $this->loadUserProfilePicture();

    }
    // public function updateUser()
    // {
    //     $this->validate([
    //         'name' => 'nullable|string|max:255',
            
    //     ]);
    //     $user = User::findOrFail(auth()->id());
    //     $user->name = $this->name;
    //     $user->save();
    //     $this->dispatch('userUpdated'); // Dispatch event to indicate successful update
    //     $this->alertMessage('success', 'Operation success', 'Update successfully!');
    // }
    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:2048', 
        ]);
        // dd($this->photo);
        // $user =  User::whereId(auth()->id())->first();
        $user = User::findOrFail(auth()->id());
        if ($this->photo) {
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }
        $image = Image::make($this->photo)->encode('jpg', 80);
        $imageName = 'profile_pictures/' . uniqid() . '.jpg';
        Storage::disk('public')->put($imageName, $image);
        $user->profile_photo_path = $imageName;
        $user->save();
            // $user->update([
            //     'profile_photo_path' =>  $imageName,
            // ]);
            // $user->save();
            $this->dispatch('refreshComponent');
            $this->loadUserProfilePicture();
            $this->dispatch('user-profile-updated'); 
            $this->alertMessage(
                'success',
                'Operation success',
                'Profile picture updated successfully!'
            );
            $this->photo = null;
        }
    }
    protected function loadUserProfilePicture()
{
    $user = User::findOrFail(auth()->id());
    if ($this->photo) {
        $this->userAvatar = $this->photo->temporaryUrl();
    } else {
        $this->userAvatar = $user->profile_photo_path 
            ? asset("storage/{$user->profile_photo_path}") 
            : asset('front-end/assets/images/user/pp.png');
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
        return view('livewire.front-end.pages.user-pannel.user-profile');
    }
}
