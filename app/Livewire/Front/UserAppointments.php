<?php

namespace App\Livewire\Front;

use App\Models\AppointmentBook;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use App\Models\Massage;
#[Layout('layouts.profile')]
class UserAppointments extends Component
{
    public $appointments;
    public $filter = 'upcoming';

    public function mount()
    {
        $this->fetchAppointments();
    }

    public function updatedFilter()
    {
        $this->fetchAppointments();
    }

    public function fetchAppointments()
    {
        $query = AppointmentBook::where('user_id', Auth::id())
            ->with(['service.serviceCategory.parent']);

        if ($this->filter == 'upcoming') {
            $query->where('date', '>=', Carbon::today()->toDateString());
        } else {
            $query->where('date', '<', Carbon::today()->toDateString());
        }

        $this->appointments = $query->get();
    }


    public function render()
    {
        return view('livewire.front.user-appointments');
    }
}
