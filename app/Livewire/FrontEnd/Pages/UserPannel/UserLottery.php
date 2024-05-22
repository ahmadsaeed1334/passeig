<?php

namespace App\Livewire\FrontEnd\Pages\UserPannel;

use Livewire\Component;
use App\Models\Favorite;
use App\Models\Giveaway;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class UserLottery extends Component
{
    use LivewireAlert;

    public $favoriteGiveaways;
    public $giveaways;

    public function mount()
    {
        $this->loadFavoriteGiveaways();
    }

    public function toggleFavorite($giveawayId)
    {
        $favorite = Favorite::where('user_id', Auth::id())
            ->where('giveaway_id', $giveawayId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product removed from favorites']);
            $this->alertMessage('success', 'Operation success', 'Product removed from favorites');
        } else {
            Favorite::firstOrCreate([
                'user_id' => Auth::id(),
                'giveaway_id' => $giveawayId,
            ]);
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product added to favorites']);
            $this->alertMessage('success', 'Operation success', 'Product added to favorites');
        }
        $this->dispatch('favoritesUpdated');
    }


    public function loadFavoriteGiveaways()
    {
        $userId = Auth::id();
        $this->favoriteGiveaways = Giveaway::whereHas('favorites', function($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
    }
    public function render()
    {
        return view('livewire.front-end.pages.user-pannel.user-lottery', [
            'favoriteGiveaways' => $this->favoriteGiveaways,
        ]);
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
