<?php

namespace App\Livewire\Front\Pages;

use App\Models\Massage;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.front')]
class Services extends Component
{
    use WithPagination;

    public function render()
    {
        $services = Massage::paginate(9); // Pagination for services

        return view('livewire.front.pages.services', [
            'services' => $services,
        ]);
    }
}
