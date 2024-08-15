<?php

namespace App\Livewire\Front;

use App\Models\Footer;
use App\Models\BestService;
use App\Models\Blog;
use App\Models\BlogTitle;
use App\Models\Category;
use App\Models\Expert;
use App\Models\ExpertTitle;
use App\Models\Health;
use App\Models\HealthTitle;
use App\Models\Provide;
use App\Models\RevSlider;
use App\Models\Massage;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductTitle;
use App\Models\ServicesCategory;
use App\Models\ServicesTitle;


use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.home')]
class HomePage extends Component
{

    public $sliders;
    public $provide;
    public $healths;
    public $healthTitle;
    public $services;
    public $servicesTitle;
    public $categories;
    public $category;
    public $bestService;
    public $expertTitle;
    public $experts;
    public $products;
    public $productTitle;
    public $blogs;
    public $blogTitle;
    public $partners;
    public $footers;

    public function mount()
    {
        $this->categories = ServicesCategory::with(['subcategories', 'services'])->whereNull('parent_id')->get();
        $this->sliders = RevSlider::all();
        $this->provide = Provide::first();
        $this->healths = Health::all();
        $this->healthTitle = HealthTitle::first();
        $this->services = Massage::all();
        $this->servicesTitle = ServicesTitle::first();
        $this->category = Category::with('images')->get();
        $this->bestService = BestService::first();
        $this->expertTitle = ExpertTitle::first();
        $this->experts = Expert::all();
        $this->products = Product::take(3)->get(); // Fetch only 3 products
        $this->productTitle = ProductTitle::first();
        $this->blogs = Blog::with('user', 'comments')->latest()->take(4)->get(); // Fetch only 4 latest blogs
        $this->blogTitle = BlogTitle::first();
        $this->partners = Partner::all();
        $this->footers = Footer::all();
    }
    public function render()
    {
        return view('livewire.front.home-page',[
            'sliders' => $this->sliders,
            'provide' => $this->provide,
            'healths' => $this->healths,
            'healthTitle' => $this->healthTitle,
            'services' => $this->services,
            'servicesTitle' => $this->servicesTitle,
            'categories' => $this->categories,
            'category' => $this->category,
            'bestService' => $this->bestService,
            'expertTitle' => $this->expertTitle,
            'experts' => $this->experts,
            'products' => $this->products,
            'productTitle' => $this->productTitle,
            'blogs' => $this->blogs,
            'blogTitle' => $this->blogTitle,
            'partners' => $this->partners,
            'footers' => $this->footers
        ]);
    }
}
