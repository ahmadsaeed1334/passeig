<?php

namespace App\Livewire\FrontEnd\Pages;

use App\Models\BuyTicket;
use App\Models\FaqTop;
use App\Models\Faq;
use App\Models\HowToPlay;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class HowWork extends Component
{
    public function render()
    {
        $howToPlayData = HowToPlay::all();
        $buyTickets = BuyTicket::all();
        $faqTops = FaqTop::all();
        $faqs = Faq::all();
        return view('livewire.front-end.pages.how-work',
    compact('howToPlayData','buyTickets', 'faqTops', 'faqs'));
    }
}
