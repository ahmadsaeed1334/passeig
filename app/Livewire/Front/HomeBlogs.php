<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Appointment;
use App\Models\Blog;

#[Layout('layouts.home')]
class HomeBlogs extends Component
{
    public function render()
    {
        return view('livewire.front.home-blogs');
    }
}
