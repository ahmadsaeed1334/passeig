<?php

namespace App\Livewire\FrontEnd\Partial;
use App\Models\HowToPlay as ModalHowToPlay;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class HowToPlay extends Component
{
    public function render()
    {
        $howToPlayData  = ModalHowToPlay::all();
        return view('livewire.front-end.partial.how-to-play',['howToPlayData' => $howToPlayData ]);
    }
}
