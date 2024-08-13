<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\AboutUs as AboutModel;
use App\Models\Passion;
use App\Models\Appointment;
use App\Models\Partner;
#[Layout('layouts.front')]
class AboutUs extends Component
{
    public $abouts;
    public $passions;
    public $partners;
    public $appointments;

    public function mount()
    {
        $this->abouts = AboutModel::all();
        $this->passions = Passion::all();
        $this->appointments = Appointment::all();
        $this->partners = Partner::all();
    }
    public function render()
    {
        return view('livewire.front.about-us', [
            'abouts' => $this->abouts,
            'passions' => $this->passions
            , 'appointments' => $this->appointments,
            'partners' => $this->partners,
        ]);
    }
}