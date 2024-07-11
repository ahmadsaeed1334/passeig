<?php

namespace App\Livewire\Front;

use App\Models\BlogTitle;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Appointment;
use App\Models\Blog;

#[Layout('layouts.front')]
class Blogs extends Component
{
    public $blogTitles;
    public $appointments;
    public $blogs;
    public function mount()
    {
        $this->blogTitles = BlogTitle::all();
        $this->appointments = Appointment::all();
        $this->blogs = Blog::latest()->with('category')->get();
    }
    public function render()
    {
        return view('livewire.front.blogs',[
            'blogTitles' => $this->blogTitles
            , 'appointments' => $this->appointments,
            'blogs' => $this->blogs
        ]);
    }
}
