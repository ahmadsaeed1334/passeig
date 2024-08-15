<?php

namespace App\Livewire\Front\Pages;

use App\Models\Massage;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServicesTitle;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class Services extends Component
{
    use WithPagination;

    public function render()
    {
        $title = ServicesTitle::first();
        $services = Massage::paginate(9); // Pagination for services

        return view('livewire.front.pages.services', [
            'services' => $services,
            'title' => $title
        ]);
    }
}
