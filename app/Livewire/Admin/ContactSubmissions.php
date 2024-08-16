<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ContactSubmission;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ContactSubmissions extends Component
{
    public function render()
    {
        return view('livewire.admin.contact-submissions', [
            'submissions' => ContactSubmission::latest()->get(),
        ]);
    }
}
