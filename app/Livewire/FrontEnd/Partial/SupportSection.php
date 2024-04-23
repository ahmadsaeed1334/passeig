<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\Support;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class SupportSection extends Component
{
    public function render()
    {
        $supports = Support::all();
        return view('livewire.front-end.partial.support-section',['supports' => $supports]);
    }
}
