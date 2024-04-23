<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class UserReferral extends Component
{
    public function render()
    {
        return view('livewire.front-end.pages.user-pannel.user-referral');
    }
}
