<?php

namespace App\Livewire\Admin\ProductSearch;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::with('categorie')
            ->where('name', 'like', "%{$this->search}%")
            ->orWhere('description', 'like', "%{$this->search}%")
            ->paginate(10);
        return view('livewire.admin.product-search.product-search', compact('products'));
    }
}
