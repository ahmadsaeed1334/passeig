<?php

namespace App\Livewire\Front;

use App\Models\Appointment;
use App\Models\Massage;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.home')]
class HomePage extends Component
{
    public $services;
    public $appointments;

    public function mount()
    {
        $this->services = Massage::all();
        $this->appointments = Appointment::all();

    }

    public function render()
    {
        return view('livewire.front.home-page', [
            'services' => $this->services,
            'appointments' => $this->appointments
        ]);
    }
}
