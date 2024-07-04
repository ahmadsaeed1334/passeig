<?php

namespace App\Livewire\Admin\Staff;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Permissions extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $permissionId,
        $permissionName, $search = null;
    protected $listeners = ['reset' => 'resetAll', 'refresh' => '$refresh', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public function resetAll()
    {
        $this->permissionId = null;
        $this->permissionName = null;
        // $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    // public function permissionDetails($id)
    // {
    // }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // public function paginationView()
    // {
    //     return 'livewire.admin.admins.pagination';
    // }

    public function edit(Permission $id)
    {
        $this->permissionId = $id->id;
        $this->permissionName = $id->name;
    }

    public function save()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate(
            [
                'permissionName' => 'required',
            ],
            [
                'permissionName.required' => 'The :attribute cannot be empty.',
            ],
            [
                'permissionName' => 'permission',
            ]
        );
        Permission::updateOrCreate(['id' => $this->permissionId], ['name' => $this->permissionName, 'guard_name' => 'web']);
        $this->alertMessage();
        $this->reset();
        $this->dispatch('closeModal', ['modalId' => "addPermissionsModel"]);
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
        access('super permissions');
        if ($this->search)
            $permissions = Permission::where('name', 'LIKE', "%{$this->search}%")
                ->with(['roles' => function ($q) {
                    $q->orderBy('created_at', 'ASC');
                    $q->select(['id', 'name']);
                }])->latest()->paginate(setting('general_settings.page_size'));
        else
            $permissions = Permission::with(['roles' => function ($q) {
                $q->orderBy('created_at', 'ASC');
                $q->select(['id', 'name']);
            }])->latest()->paginate(setting('general_settings.page_size'));
        // dd($permissions);
        $total_permissions = $permissions->total();
        return view('livewire.admin.staff.permissions', ['permissions' => $permissions, 'total_permissions' => $total_permissions]);
    }
}