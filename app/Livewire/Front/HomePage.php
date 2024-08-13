<?php

namespace App\Livewire\Front;
use App\Models\RevSlider;


use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.home')]
class HomePage extends Component
{

    public $sliders;

    public function mount()
    {
        $this->sliders = RevSlider::all();
    }
    public function render()
    {
        return view('livewire.front.home-page',[
            'sliders' => $this->sliders
        ]);
    }
}
