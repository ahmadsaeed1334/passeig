<?php

namespace App\Livewire\Front\Pages;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Subscriber;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Products extends Component
{
    public $products;
    public $blogs;
    public $partners;
    public $categories;

    public function mount()
    {
        $this->products = Product::all();
        $this->blogs = Blog::with('user', 'comments')->latest()->take(4)->get();
        $this->partners = Partner::all();
        $this->categories = Category::with('images')->get();
    }
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
        return view('livewire.front.pages.products', [
            'products' => $this->products,
            'blogs' => $this->blogs,
            'partners' => $this->partners,
            'categories' => $this->categories,
        ]);
    }
}
