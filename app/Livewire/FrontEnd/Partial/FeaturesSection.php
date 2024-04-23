<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use App\Models\Feature;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class FeaturesSection extends Component
{
    public function render()
    {
        $features = Feature::all();
        return view('livewire.front-end.partial.features-section', ['features'=> $features]);
    }
}
