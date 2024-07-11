<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Footer;

#[Layout('layouts.front')]
class Footers extends Component
{
public $footers;
    public function mount()
    {
        $this->footers = Footer::all();
    }
    public function render()
    {
        return view('livewire.front.footers',[
            'footers' => $this->footers
        ]);
    }
}
