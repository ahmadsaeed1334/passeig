<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use App\Models\User;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
#[Layout('layouts.front')]
class UserInfo extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $date_of_birth;
    public $useraddress;
    public $editingMode = false;
    public $email;
    public $phone;
    public $editingModeEmail = false;
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;
    public $editingModePassword = false;
    public $showPassword = false;
    public $photo;
    public $userAvatar; 
    public function mount()
    {
        // $user = Auth::user();
        $user = User::findOrFail(auth()->id());

        $this->name = $user->name;
        $this->date_of_birth = $user->date_of_birth;
        $this->useraddress = $user->useraddress;
        $this->email = $user->email;
        $this->phone = $user->phone;

    }
    public function showLoginAlert()
    {
        $this->emit('showAlert', [
            'type' => 'warning',
            'title' => 'Attention!',
            'text' => 'Please log in to access the User Panel.',
        ]);
    }
    public function toggleEditMode()
    {
        $this->editingMode = !$this->editingMode;
    }
    public function toggleEditModeEmail()
    {
        $this->editingModeEmail = !$this->editingModeEmail;
    }
    public function toggleEditModePassword()
    {
        $this->editingModePassword = !$this->editingModePassword;
    }
    public function updateUser()
    {
        $this->validate([
            'name' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date', // Adjust validation rules as needed
            'useraddress' => 'nullable|string|max:255',
        ]);
        $user = User::findOrFail(auth()->id());
        $user->name = $this->name;
        $user->date_of_birth = $this->date_of_birth;
        $user->useraddress = $this->useraddress;
        $user->save();
        $this->dispatch('userUpdated'); // Dispatch event to indicate successful update
        $this->alertMessage('success', 'Operation success', 'Update successfully!');
        $this->editingMode = false; // Hide edit form after successful update
    }
    public function updateUserEmail()
    {
        $this->validate([
            'email' => 'nullable|string|email',
            'phone' => 'nullable|string',
        ]);
        $user = User::findOrFail(auth()->id());
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->save();
        $this->dispatch('userUpdatedEmail');
        $this->alertMessage('success', 'Operation success', 'Update successfully!');
        $this->editingModeEmail = false;
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
    // public function updateUserPassword()
    // {
    //     dd('updateUserPassword method called');
    //     $this->validate([
    //         'currentPassword' => 'required|string',
    //         'newPassword' => 'required|string|min:8|confirmed',
    //     ]);
    //     // $user = Auth::user();
    //     $user = User::findOrFail(auth()->id());

    //     dd('updateUserPassword method called');
    //     if (!Hash::check($this->currentPassword, $user->password)) {
    //         $this->addError('currentPassword', 'The current password is incorrect.');
    //         return;
    //     }
    //     $user->password = Hash::make($this->newPassword);
    //     $user->save();
    //     $this->dispatch('userUpdatedPassword');
    //     $this->alertMessage('success', 'Operation success', 'Password updated successfully!');
    //     $this->editingModePassword = false; 
    // }
    public function updateUserPassword()
    {
        Log::info('Update password method called');
    
        try {
            // Validate the request data
            $this->validate([
                'currentPassword' => 'required|string',
                'newPassword' => 'required|string|min:8|different:currentPassword',
                'confirmPassword' => 'required|string|same:newPassword',
            ], [
                'newPassword.different' => 'The new password must be different from the current password.',
                'confirmPassword.same' => 'The confirmation password must match the new password.',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed: ' . $e->getMessage());
            return;
        }
    
        Log::info('Validation passed');
    
        // Retrieve the authenticated user
        $user = User::findOrFail(auth()->id());
    
        // Hash the new password
        $hashedPassword = Hash::make($this->newPassword);
    
        // Attempt to update the user's password
        try {
            // Check if the current password matches the user's password
            if (!Hash::check($this->currentPassword, $user->password)) {
                Log::info('Current password incorrect');
                $this->addError('currentPassword', 'The current password is incorrect.');
                return;
            }
    
            // Update the user's password
            $user->password = $hashedPassword;
            
            $user->save();
            $this->alertMessage('success', 'Operation success', 'Password updated successfully!');
    
            Log::info('Password updated successfully');
        } catch (\Exception $e) {
            Log::error('Exception updating password: ' . $e->getMessage());
            return;
        }
    
        // Dispatch event or perform any other action upon successful password update
        $this->editingModePassword = false; // Hide the password edit form
    }
    
    public function toggleShowPassword()
    {
        $this->showPassword = !$this->showPassword;
    }
   
    public function render()
    {
        return view('livewire.front-end.pages.user-pannel.user-info');
    }
}
