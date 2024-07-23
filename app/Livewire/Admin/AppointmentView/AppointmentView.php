<?php

namespace App\Livewire\Admin\AppointmentView;

use App\Models\AppointmentBook;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

#[Layout('layouts.app')]
class AppointmentView extends Component
{
    use WithPagination, LivewireAlert;

    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function changeStatus($appointmentId, $newStatus)
    {
        $appointment = AppointmentBook::find($appointmentId);
        if ($appointment) {
            $appointment->status = $newStatus;
            $appointment->save();
            // session()->flash('message', 'Status updated successfully.');
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Status updated successfully.']);
            $this->alertMessage('success', 'Operation success','Status updated successfully.');
        }
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
        $appointments = AppointmentBook::with('user', 'service')
            ->whereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('service', function ($query) {
                $query->where('service_name', 'like', '%' . $this->search . '%');
            })
            ->paginate(15);

        return view('livewire.admin.appointment-view.appointment-view', compact('appointments'));
    }
}