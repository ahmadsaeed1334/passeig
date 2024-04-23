<?php

namespace App\Livewire\FrontEnd\Contests;

use App\Models\categorie;
use Livewire\Component;
use App\Models\GiveawayEntry;

use App\Models\Giveaway;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class ContestSection extends Component
{
    public $selectedCategoryId;
    public $selectCategory;
    
    public function render()
    {
        
        $giveaways = Giveaway::all();
        $categories = categorie::all();
        return view('livewire.front-end.contests.contest-section', ['giveaways'=> $giveaways,
        'categories'=>$categories]);
    }
}
