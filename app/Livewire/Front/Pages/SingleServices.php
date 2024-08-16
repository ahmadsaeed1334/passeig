<?php

namespace App\Livewire\Front\Pages;

use App\Models\Blog;
use App\Models\Massage;
use App\Models\Partner;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Layout;
use App\Models\AppointmentService;

#[Layout('layouts.front')]
class SingleServices extends Component
{
    public $service;
    public $blogs;
    public $partners;
    public $category;

    public function mount($id)
    {
        $this->service = AppointmentService::select('id', 'service_name as title', 'description as long_description', 'image')->findOrFail($id);
        $this->blogs = Blog::with('user', 'comments')->latest()->take(4)->get();
        $this->partners = Partner::all();
        $this->category = Category::with('images')->get();
    }

    public function render()
    {
        return view('livewire.front.pages.single-services', [
            'service' => $this->service,
            'blogs' => $this->blogs,
            'partners' => $this->partners,
            'category' => $this->category,
        ]);
    }
}
