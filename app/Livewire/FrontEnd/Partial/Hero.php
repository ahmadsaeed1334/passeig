<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\HeroBanner;
#[Layout('layouts.front')]
class Hero extends Component
{
    // public $heroBannerData; // Renamed for consistency

    public function render()
    {
        $heroBannerData  = HeroBanner::all();
        // dd( $heroBannerData);
        return view('livewire.front-end.partial.hero',['heroBannerData' => $heroBannerData ]);
    }
}
