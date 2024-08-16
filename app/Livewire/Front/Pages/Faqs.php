<?php

namespace App\Livewire\Front\Pages;

use App\Models\Faq;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Faqs extends Component
{
    public $faqs;


    public function mount(){

        $this->faqs = Faq::all();

    }
    public function render()
    {
        return view('livewire.front.pages.faqs',[
            'faqs' => $this->faqs
        ]);
    }
}
