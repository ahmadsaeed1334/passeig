<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use App\Models\Overview as ModalOverview;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Overview extends Component
{
    public function render()
    {
        $overviews = ModalOverview::all();
        return view('livewire.front-end.partial.overview', ['overviews' => $overviews ]);
    }
}
