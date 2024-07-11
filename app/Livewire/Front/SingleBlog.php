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
        $this->blog = Blog::findOrFail($id);
        $this->appointments = Appointment::all();

    }
    public function render()
    {
        $relatedBlogs = Blog::where('id', '!=', $this->blogId)->take(4)->get();

        return view('livewire.front.single-blog', [
            'blog' => $this->blog,
            'relatedBlogs' => $relatedBlogs,
            'appointments' => $this->appointments
        ]);
    }
}
