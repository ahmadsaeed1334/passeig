<?php

namespace App\Livewire\Front\Pages;

use Livewire\Component;
use App\Models\ContactSubmission;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class Contacts extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        ContactSubmission::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->resetFields();
        session()->flash('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    private function resetFields()
    {
        $this->name = null;
        $this->email = null;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.front.pages.contacts');
    }
}
