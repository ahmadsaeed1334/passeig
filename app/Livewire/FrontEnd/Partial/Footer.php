<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\FooterText;
use App\Models\FooterIcon;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Footer extends Component
{
    public function render()
    {
        $footerIcons = FooterIcon::all();
        $footerTexts = FooterText::all();
        return view('livewire.front-end.partial.footer', compact('footerIcons', 'footerTexts'));
    }
}
