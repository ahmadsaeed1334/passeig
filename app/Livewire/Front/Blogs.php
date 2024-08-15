<?php

namespace App\Livewire\Front;

use App\Models\Blog;
use Livewire\Component;
use App\Models\BlogTitle;
use App\Models\Appointment;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class Blogs extends Component
{
    use WithPagination;

    public $blogTitles;
    public $blogs;

    public function mount()
    {
        $this->blogTitles = BlogTitle::first();
        $this->blogs = Blog::latest()
            ->with(['user:id,name', 'category'])
            ->withCount('comments')
            ->get();
        // dd($this->blogs);
    }

    public function render()
    {
        return view('livewire.front.blogs', [
            'title' => $this->blogTitles,
            'blogs' => $this->blogs,
            'page_title' => "Blogs"
        ]);
    }
}
