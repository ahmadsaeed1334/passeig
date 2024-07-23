<?php

namespace App\Livewire\Front;

use App\Models\AppointmentBook;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use App\Models\Massage;
#[Layout('layouts.profile')]
class UserDashboard extends Component
{
    public $todayAppointments = [];
    public $upcomingAppointments = [];
    public $pastAppointments = [];

    public function mount()
    {
        $this->fetchAppointments();
    }

    public function fetchAppointments()
    {
        $userId = Auth::id();
        $today = Carbon::today()->toDateString();

        $this->todayAppointments = AppointmentBook::with('service.serviceCategory')
            ->where('user_id', $userId)
            ->where('date', $today)
            ->get();

        $this->upcomingAppointments = AppointmentBook::with('service.serviceCategory')
            ->where('user_id', $userId)
            ->where('date', '>', $today)
            ->get();

        $this->pastAppointments = AppointmentBook::with('service.serviceCategory')
            ->where('user_id', $userId)
            ->where('date', '<', $today)
            ->get();
    }
    public function render()
    {
        return view('livewire.front.user-dashboard');
    }
}
