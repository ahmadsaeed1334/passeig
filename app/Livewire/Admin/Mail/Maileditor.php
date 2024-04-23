<?php

namespace App\Livewire\Admin\Mail;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Maileditor extends Component
{
    public function render()
    {
        return view('livewire.admin.mail.maileditor');
    }
}
