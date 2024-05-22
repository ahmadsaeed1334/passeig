<?php

namespace App\Livewire\FrontEnd\Filter;

use App\Models\Giveaway;
use Livewire\Component;
use App\Models\Category;
class ContestFilter extends Component
{
    public $selectedSort;
    public $selectedMake;
    public $priceRange;
    public $searchTerm;
    public function render()
    {
        $query = Giveaway::query();

        if ($this->selectedSort) {
            $query->orderBy('name', $this->selectedSort);
        }

        if ($this->selectedMake) {
            $query->where('make', $this->selectedMake);
        }

        if ($this->priceRange) {
            list($min, $max) = explode(';', $this->priceRange);
            $query->whereBetween('price', [(int) $min, (int) $max]);
        }

        if ($this->searchTerm) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        }

        $giveaways = $query->get();
        return view('livewire.front-end.filter.contest-filter', ['giveaways' => $giveaways]);
    }
}
