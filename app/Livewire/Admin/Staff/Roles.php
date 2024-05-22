<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Symfony\Component\HttpFoundation\Response;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Roles extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $roleId,
        $roleName,
        $per = [], $roleD, $isAdd = false;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['reset' => 'resetAll', 'refresh' => '$refresh', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetAll()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function detail($id)
    {
        $this->dispatch('RoleID', $id);
    }

    public function edit(Role $id)
    {
        $this->isAdd = true;
        $this->roleId = $id->id;
        $this->roleName = $id->name;
        $this->per = $id->permissions->pluck('id');
    }

    public function save()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate(
            [
                'roleName' => 'required|unique:roles,name,' . $this->roleId . ',id',
                'per' => 'required',
                // 'photo' => 'required',
            ],
            [
                'roleName.required' => 'The :attribute cannot be empty.',
                'per.required' => 'The :attribute cannot be empty.',
                // 'photo.required' => 'The :attribute cannot be empty.',
            ],
            [
                'roleName' => 'Role',
                'per' => 'Permissions',
                // 'photo' => 'Photo',
            ]
        );
        $role = Role::updateOrCreate(['id' => $this->roleId], ['name' => $this->roleName, 'guard_name' => 'web']);
        // $permission = Permission::create(['name' => 'edit articles']);
        $per = Permission::whereIn('id', $this->per)->get();
        $role->syncPermissions($per);
        // $permission->syncRoles($role);
        $this->alertMessage('success', 'Operation success',
        'Role has been updated successfully');
        $this->reset();
        $this->dispatch('closeModal', ['modalId' => "addRolesModel"]);
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
        access('super roles');

        $roles = Role::with(['permissions'])->withCount('users')->paginate(setting('general_settings.page_size'));
        // dd($roles->users->count());
        $total_roles = $roles->total();
        if ($this->isAdd)
            $permissions = Permission::all();
        else
            $permissions = [];
        // dd($permissions);
        return view('livewire.admin.staff.roles', ['roles' => $roles, 'total_roles' => $total_roles, 'permissions' => $permissions]);
    }
}
