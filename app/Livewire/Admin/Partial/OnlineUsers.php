<?php

namespace App\Livewire\Admin\Partial;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Rainwater\Active\Active;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class OnlineUsers extends Component
{
   
    use LivewireAlert;

    public $users, $device, $browser, $version, $platform, $platformVersion;
    protected $listeners = ['refreshData' => 'refreshData', 'refreshPhoto' => '$refresh'];

    public function userProfile($id)
    {
        $this->dispatch('userProfile', $id);
    }

    public function deleteAndBan($id, $uid)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        DB::table('sessions')->whereId($id)->delete();
        User::whereId($uid)->update([
            'status' => 0,
        ]);
    }

    public function logout($id)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        DB::table('sessions')->whereId($id)->delete();
    }

    public function refreshData()
    {

        $this->users = Active::usersWithinHours(12)
            ->mostRecent()
            // ->take(10)
            ->with('user.roles')
            // ->whereHas('user', function ($q) {
            //     $q->where('user_type', '>=', 0);
            // })
            ->get();
    }

    public function render()
    {
        ini_set('memory_limit', '-1');
        // $this->refreshData();
        return view('livewire.admin.partial.online-users');
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
}
