<?php

namespace App\Livewire\FrontEnd\WinnerDetails;

use App\Models\Support;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class WinnerDetails extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        $supports = Support::all();
        return view('livewire.front-end.winner-details.winner-details', ['testimonials'=> $testimonials , 'supports' => $supports]);
    }
}
