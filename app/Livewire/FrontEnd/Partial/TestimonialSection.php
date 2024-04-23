<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class TestimonialSection extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        return view('livewire.front-end.partial.testimonial-section',['testimonials' => $testimonials]);
    }
}
