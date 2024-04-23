<?php

namespace App\Livewire\FrontEnd\Pages;
use App\Models\Faq as Faqs;
use App\Models\FaqsCategory;
use App\Models\FaqTop;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Faq extends Component
{
    public function render()
    {
        $faqCatagories = FaqsCategory::all();
        $faqTops = FaqTop::all(); 
        $faqs = Faqs::all();
        return view('livewire.front-end.pages.faq',
    compact('faqTops', 'faqCatagories', 'faqs'));
    }
}
