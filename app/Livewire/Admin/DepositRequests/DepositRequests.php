<?php

namespace App\Livewire\Admin\DepositRequests;

use App\Models\DepositRequest;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\DepositApproved;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use HPWebdeveloper\LaravelPayPocket\Facades\LaravelPayPocket;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class DepositRequests extends Component
{
    use LivewireAlert;
    use WithPagination;

    // public $requests;

    public function mount()
    {
        // $this->requests = DepositRequest::where('status', 'pending')->get();
        $requests = DepositRequest::with('user')->where('status', 'pending')->get();

    }

    // public function approve($id)
    // {
    //     $request = DepositRequest::find($id);
    //     if ($request && $request->user) {
    //         $request->update(['status' => 'approved']);

    //         // Send email notification to the user
    //         Mail::to($request->user->email)->queue(new DepositApproved($request));

    //         // Refresh the requests list
    //         $this->requests = DepositRequest::with('user')->where('status', 'pending')->get();

    //         // session()->flash('message', 'Deposit request approved successfully.');
    //         $this->alertMessage('success', 'Operation success', 'Deposit request approved successfully.');

    //     } else {
    //         // session()->flash('error', 'Unable to approve deposit request.');
    //         $this->alertMessage('error', 'Operation Failed', 'Unable to approve deposit request.');

    //     }
    // }
    public function approve($id)
    {
        $request = DepositRequest::find($id);
        if ($request && $request->user) {
            $request->update(['status' => 'approved']);

            // Assign the deposit amount to the user's wallet
            $user = $request->user;
            $amount = $request->amount;
            LaravelPayPocket::deposit($user, 'wallet_2', $amount, 'Deposit request approved');

            // Send email notification to the user
            Mail::to($user->email)->queue(new DepositApproved($request));

            // Refresh the requests list
            $requests = DepositRequest::with('user')->where('status', 'pending')->get();

            $this->alertMessage('success', 'Operation success', 'Deposit request approved successfully.');
        } else {
            $this->alertMessage('error', 'Operation Failed', 'Unable to approve deposit request.');
        }
    }
    public function reject($id)
    {
        $request = DepositRequest::find($id);
        if ($request) {
            $request->update(['status' => 'rejected']);

            // Refresh the requests list
            $requests = DepositRequest::with('user')->where('status', 'pending')->get();

            session()->flash('message', 'Deposit request rejected.');
            $this->alertMessage('success', 'Operation Success', 'Deposit request rejected.');
        } else {
            // session()->flash('error', 'Unable to reject deposit request.');
            $this->alertMessage('error', 'Operation Failed', 'Unable to reject deposit request.');
        }
    }
    public function render()
    {
                $requests = DepositRequest::with('user')->where('status', 'pending')->paginate(10);

        return view('livewire.admin.deposit-requests.deposit-requests', [
            'requests' => $requests
        ]);
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
}
