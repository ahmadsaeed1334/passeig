<?php

namespace App\Livewire\FrontEnd\Pages;

use Livewire\Component;
use App\Models\TermsCondition as TermsConditions;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class TermsCondition extends Component
{
    public $termsConditionContent;

    public function mount()
    {
        $this->termsConditionContent = TermsConditions::pluck('content')->first();
    }
    public function render()
    {
        return view('livewire.front-end.pages.terms-condition');
    }
}
