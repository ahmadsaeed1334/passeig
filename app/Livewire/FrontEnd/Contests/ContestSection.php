<?php

namespace App\Livewire\FrontEnd\Contests;

use App\Models\Categorie;
use App\Models\Favorite;
use Livewire\Component;
use App\Models\Giveaway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Abbasudo\Purity\Traits\Filterable;
use Abbasudo\Purity\Traits\Sortable;
#[Layout('layouts.front')]
class ContestSection extends Component
{
    use LivewireAlert, Filterable, Sortable;
    public $sortBy = 'default'; 
    public $priceRange = [0, 1000]; 
    public $selectedFilters = []; 
    public $selectedCategoryId;
    public $categories;
    // public $selectCategory;
    public function mount()
    {
        // $this->sortByUpdated();
        $this->selectedFilters = ['categories' => 'all']; 
        $this->categories = Categorie::all();
    }
    public function updated($propertyName)
    {
        if ($propertyName == 'sortBy' || $propertyName == 'selectedFilters') {
            $this->dispatch('sortUpdated');
        }
    }
    public function filteredProducts()
    {
        $products = Giveaway::query()->filter();
            if ($this->sortBy === 'price_asc') {
            $products->orderBy('fee', 'asc');
        } elseif ($this->sortBy === 'price_desc') {
            $products->orderBy('fee', 'desc');
        }
            if ($this->selectedFilters['categories'] !== 'all') {
            $products->where('category_id', $this->selectedFilters['categories']);
        }
        $products->whereBetween('fee', $this->priceRange);
        return $products->get();
    }
    
//     public function filteredProducts()
// {
//     $products = Giveaway::query();

//     if ($this->sortBy === 'price_asc') {
//         $products->orderBy('fee', 'asc');
//     } elseif ($this->sortBy === 'price_desc') {
//         $products->orderBy('fee', 'desc');
//     }

//     // Apply other filters like category and price range
//     if ($this->selectedFilters['category'] !== 'all') {
//         $products->where('category_id', $this->selectedFilters['category']);
//     }
//     $products->whereBetween('fee', $this->priceRange);

//     return $products->get();
// }
    public function toggleFavorite($giveawayId)
    {
        if (!Auth::check()) {
            $this->dispatch('showAlert', ['type' => 'error', 'message' => 'You need to be logged in to favorite a product.']);
            $this->alertMessage('warning', 'Operation failed', 'You need to be logged in to favorite a product.');
            return;
        }
        $favorite = Favorite::where('user_id', Auth::id())
            ->where('giveaway_id', $giveawayId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $this->dispatch('favoritesUpdated');
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product removed from favorites']);
            $this->alertMessage('success', 'Operation success', 'Product removed from favorites');
        } else {
            Favorite::firstOrCreate([
                'user_id' => Auth::id(),
                'giveaway_id' => $giveawayId,
            ]);
            $this->dispatch('favoritesUpdated');
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product added to favorites']);
            $this->alertMessage('success', 'Operation success', 'Product added to favorites');

        }
        // $this->dispatch('favoritesUpdated');
       
    }
    public function render()
    {
        $giveaways = $this->filteredProducts();
        $categories = $this->categories ?? [];
        return view('livewire.front-end.contests.contest-section', [
            'giveaways' => $giveaways,
            'categories' => $categories
        ]);
    }
    public function sortByUpdated()
{
    if ($this->sortBy === 'price_asc') {
        $this->sortByAscending();
    } elseif ($this->sortBy === 'price_desc') {
        $this->sortByDescending();
    }
}

    public function sortByAscending()
    {
        $this->sortBy = 'price_asc';
 
    }
    public function sortByDescending()
    {
        $this->sortBy = 'price_desc';
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $backgroundColors = [
            'success' => '#00FF00',  
            'error' => '#dc3545',  
            'warning' => '#ffc107',  
        ];
        $backgroundColor = $type ? $backgroundColors[$type] ?? alert('background') : alert('background');
    
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => $backgroundColor,
        ]);
    }
}