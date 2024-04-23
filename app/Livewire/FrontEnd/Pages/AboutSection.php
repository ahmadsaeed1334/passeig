<?php

namespace App\Livewire\FrontEnd\Pages;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Team;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class AboutSection extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        $abouts = About::all();
        $aboutfeatures  = AboutFeature::all();
        $teams  = Team::all();
      
        return view('livewire.front-end.pages.about-section', ['testimonials' => $testimonials ,
         'abouts' => $abouts ,
        'aboutfeatures' => $aboutfeatures,
    'teams' => $teams]);
    }
}
