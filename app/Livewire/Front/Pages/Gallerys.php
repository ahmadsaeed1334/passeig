<?php

namespace App\Livewire\Front\Pages;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Gallerys extends Component
{
    public $categories;

    public function mount()
    {
        // Fetching the categories and gallery items
        $this->categories = Category::with('images')->get();
    }
    public function render()
    {
        return view('livewire.front.pages.gallerys',[
            'categories' => $this->categories
        ]);
    }
}
