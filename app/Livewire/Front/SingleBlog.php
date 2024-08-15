<?php

namespace App\Livewire\Front;

use App\Models\Appointment;
use App\Models\Blog;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class SingleBlog extends Component
{
    public $blog;
    public $blogId;
    public $appointments;

    public function mount($id)
    {
        $this->blogId = $id;
        $this->blog = Blog::whereId($id)->with(['user:id,name', 'category'])
            ->withCount('comments')->first();
    }
    public function render()
    {
        $relatedBlogs = Blog::where('id', '!=', $this->blogId)->with(['user:id,name', 'category'])
            ->withCount('comments')->take(5)->get();
        // dd($relatedBlogs);
        return view('livewire.front.single-blog', [
            'blog' => $this->blog,
            'relatedBlogs' => $relatedBlogs,
        ]);
    }
}
