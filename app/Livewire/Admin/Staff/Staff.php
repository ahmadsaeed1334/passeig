<?php

namespace App\Livewire\Admin\Staff;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Staff extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Users';
    public $staffId = null,
        $staffName = null,
        $staffEmail = null,
        $roleName = null,
        $staffStatus = 1, $password, $randomPassword, $isOpen = false;
    public
        $profile,
        $dob,
        $address,
        $country,
        $join,
        $iqama,
        $code,
        $salary,
        $phone;
    public $search = null,
        $reward = 0,
        $wallet = 0,
        $user_id = null,
        $isProfile = false;

    protected $listeners = ['reset' => 'resetAll', 'refresh' => '$refresh', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public function resetAll()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function randomPassword()
    {
        $this->randomPassword = random_password();
        $this->password = $this->randomPassword;
    }

    public function userProfile($id)
    {
        $this->dispatch('userProfile', $id);
    }

    public function detail($id)
    {
        $this->dispatch('departmentID', $id);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit(User $id)
    {
        $this->isOpen = true;
        $this->staffId = $id->id;
        $this->staffName = $id->name;
        $this->staffEmail = $id->email;
        $this->staffStatus = $id->status;
        $this->roleName = Str::between($id->getRoleNames(), '["', '"]');
        // $this->roleName = $id ? $id->getRoleNames()[0] : '';
    }

    public function store()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        if ($this->staffId) {
            $this->validate(
                [
                    'staffName' => 'required',
                    'staffEmail' =>  'required|email|unique:users,email,' . $this->staffId . ',id',
                    'roleName' => 'required',
                ],
                [
                    'staffName.required' => 'The :attribute cannot be empty.',
                    'staffEmail.required' => 'The :attribute cannot be empty.',
                    'roleName.required' => 'The :attribute cannot be empty.',
                ],
                [
                    'staffName' => 'Name',
                    'staffEmail' => 'Email',
                    'roleName' => 'Role',
                ]
            );

            $user = User::updateOrCreate(['id' => $this->staffId], [
                'name' => $this->staffName,
                'email' => $this->staffEmail,
                'status' => $this->staffStatus,
            ]);
        } else {
            $this->validate(
                [
                    'staffName' => 'required',
                    'staffEmail' =>  'required|email|unique:users,email,' . $this->staffId . ',id',
                    'roleName' => 'required',
                    'password' => 'required',
                ],
                [
                    'staffName.required' => 'The :attribute cannot be empty.',
                    'staffEmail.required' => 'The :attribute cannot be empty.',
                    'roleName.required' => 'The :attribute cannot be empty.',
                    'password.required' => 'The :attribute cannot be empty.',
                ],
                [
                    'staffName' => 'Name',
                    'staffEmail' => 'Email',
                    'roleName' => 'Role',
                    'password' => 'Password',
                ]
            );

            $user = User::updateOrCreate(['id' => $this->staffId], [
                'name' => $this->staffName,
                'email' => $this->staffEmail,
                // 'user_type' => 0,
                'status' => $this->staffStatus,
                'password' => Hash::make($this->password),
                'lang' => default_lang()
            ]);
        }


        $user->syncRoles($this->roleName);
        $this->alertMessage('success', 'Operation success',
            'User '. $this->staffName.'has been '. ($this->staffId? 'updated' : 'created'));
        $this->reset();
        $this->dispatch('closeModal', ['modalId' => "addStaffModal"]);
    }

    public function delete(User $user)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $user->delete();
        $this->alertMessage('success', 'Operation success',
        'User '. $user->name.'has been deleted');
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

    public function changePassword()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate(
            [
                'password' => ['required'],
            ],
            [
                'password.required' => 'The :attribute cannot be empty.',
            ],
            [
                'password' => 'Password',
            ]
        );
        $user = User::whereId($this->user_id)->first();
        $user->update([
            'password' =>  Hash::make($this->password)
        ]);
        $this->alertMessage('success', 'Operation success',
        'User '. $user->name.'has been updated');
   
        $this->password = null;
        $this->dispatch('closeModal', ['modalId' => "usersModal"]);
    }

    public function activeInactive(User $id, $status)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $id->update([
            'status' => $status,
        ]);
        $this->alertMessage('success', 'Operation success',
        'User '. $id->name.'has been '. ($status? 'activated' : 'deactivated'));
   
    }


    public function render()
    {
        // access('super staff');
        $users = User::staff()->search($this->search)
            ->where('id', '<>', auth()->id())
            ->latest()
            ->select('id', 'name', 'status', 'created_at', 'last_seen', 'email', 'updated_at', 'lang', 'password')
            ->paginate(setting('general_settings.page_size'));
        $total_users = $users->total();
        // dd($users);
        return view('livewire.admin.staff.staff', ['users' => $users, 'total_users' => $total_users]);
    }
}
