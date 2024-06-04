<?php

namespace App\Livewire\FrontEnd\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class VerificationModal extends Component
{
    public $verification_code;

    public function render()
    {
        return view('livewire.front-end.partial.verification-modal');
    }
}
