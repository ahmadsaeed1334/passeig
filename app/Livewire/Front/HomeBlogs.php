<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Appointment;
use App\Models\Blog;

#[Layout('layouts.front')]
class HomeBlogs extends Component
{
     public $blogs;

    public function mount()
    {
        $this->blogs = Blog::latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.front.home-blogs', [
            'blogs' => $this->blogs
        ]);
    }
}
