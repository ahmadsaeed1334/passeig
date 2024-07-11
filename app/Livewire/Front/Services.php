<?php

namespace App\Livewire\Front;

use App\Models\Appointment;
use App\Models\ServicesTitle;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Massage;
#[Layout('layouts.front')]
class Services extends Component
{
    public $servicesTitles;
    public $services;
    public $appointments;
    public function mount()
    {
        $this->servicesTitles = ServicesTitle::all();
        $this->services = Massage::all();
        $this->appointments = Appointment::all();
    }
    public function render()
    {
        return view('livewire.front.services',[
            'services' => $this->services,
            'servicesTitles' => $this->servicesTitles
            , 'appointments' => $this->appointments
        ]);
    }
}
