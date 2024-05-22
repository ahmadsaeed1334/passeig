<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\Favorite;
use Livewire\Component;
use App\Models\Giveaway;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Contest extends Component
{
    use LivewireAlert;
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
        $giveaways = Giveaway::all();
        return view('livewire.front-end.partial.contest', compact('giveaways'));
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
