<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use App\Models\Giveaway as ModelsGiveaway;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Contest extends Component
{
    public function render()
    {
        $giveaways = ModelsGiveaway::all();
        return view('livewire.front-end.partial.contest', compact('giveaways'));
    }
}
