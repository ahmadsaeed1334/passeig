<?php

namespace App\Livewire\Admin\Staff;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class PermissionDetails extends Component
{
    public $permission, $users;

    protected $listeners = ['reset' => 'resetAll', 'PermissionID' => 'setId', 'refreshPermission' => '$refresh', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];


    public function resetAll()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function setId($id)
{
    try {
        $this->permission = Permission::whereId($id)->orWhere('name', $id)->firstOrFail();
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Handle the exception if necessary
        $this->permission = null;
        return; // Exit the method early
    }

    $this->users = User::whereHas('roles', function ($query) {
        $query->whereHas('permissions', function ($query) {
            $query->where('id', $this->permission->id);
        });
    })->select('id', 'name', 'profile_photo_path')->get();

    // Dispatch the event to open the modal
    $this->dispatch('openModal', ['modalId' => "permissionDetailsModal"]);
}


    // public function setId($id)
    // {
    //     // $this->permission = Permission::whereId($id)->orWhere('name', $id)->with(['users.position', 'users.department', 'roles'])->withCount('users')->first();
    //     $this->permission = Permission::whereId($id)->orWhere('name', $id)->firstOrFail();
    //     $permission = $this->permission;
    //     $this->users = User::whereHas('roles', function ($query) use ($permission) {
    //         $query->whereHas('permissions', function ($query) use ($permission) {
    //             $query->where('id', $permission->id);
    //         });
    //     })->select('id', 'name', 'profile_photo_path')
    //         ->get();
    //     // dd($this->users);
    //     $this->dispatch('openModal', ['modalId' => "permissionDetailsModal"]);
    // }

    public function render()
    {
        return view('livewire.admin.staff.permission-details');
    }
}
