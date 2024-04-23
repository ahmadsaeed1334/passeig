<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class RoleDetails extends Component
{
    public $role;

    protected $listeners = ['reset' => 'resetAll', 'RoleID' => 'setId', 'refreshRole' => '$refresh', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public function resetAll()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function setId($id)
    {
        $this->role = Role::whereId($id)->orWhere('name', $id)->with(['users', 'permissions'])->withCount('users')->first();
        // dd($this->role);
        $this->dispatch('openModal', ['modalId' => "roleDetailsModel"]);
    }

    public function render()
    {
        return view('livewire.admin.staff.role-details');
    }
}
