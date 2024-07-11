<?php

namespace App\Livewire\Front;

use App\Models\Product;
use App\Models\ProductTitle;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Appointment;

#[Layout('layouts.front')]
class Products extends Component
{
    public $products;
    public $productTitles;
    public $appointments;

    public function mount()
    {
        $this->products = Product::with('categorie')->get();
        $this->productTitles = ProductTitle::all();
        $this->appointments = Appointment::all();


    }

    public function render()
    {
        return view('livewire.front.products', [
            'products' => $this->products,
            'productTitles' => $this->productTitles
            , 'appointments' => $this->appointments
        ]);
    }
}
