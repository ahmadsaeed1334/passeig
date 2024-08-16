<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class NewsletterForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscribers,email',
    ];

    public function submit()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email,
        ]);

        session()->flash('message', 'Thank you for subscribing!');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
