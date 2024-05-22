<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Header extends Component
{
    use LivewireAlert;
    public $user;
    public $favoriteCount = 0;
    public $personalWalletBalance = 0.00;
    public $businessWalletBalance = 0.00;
    protected $listeners = ['favoritesUpdated' => 'updateFavoriteCount'];

    public function mount()
    {
        $this->user = Auth::user();
        $this->updateFavoriteCount();
        $this->updateWalletBalances();


    }
    public function updateFavoriteCount()
    {
        if (Auth::check()) {
            $this->favoriteCount = Favorite::where('user_id', Auth::id())->count();
        }
    }
    public function updateWalletBalances()
    {
        $user = Auth::user();
        if ($user) {
            $this->personalWalletBalance = $user->wallet()->where('type', 'wallet_2')->value('balance') ?? 0.00;
            $this->businessWalletBalance = $user->wallet()->where('type', 'wallet_1')->value('balance') ?? 0.00;
        }
    }
    public function userPanel()
    {
        if (!Auth::check()) {
            $this->alertMessage('warning', 'Operation failed', 'Please log in to access the User Panel.');
        } else {
            // Redirect the logged-in user to the User Panel route
            return redirect()->route('front-end/user-panel');
        }
    }
    public function userlottery()
    {
        if (!Auth::check()) {
            $this->alertMessage('warning', 'Operation failed', 'Please log in to access the User Panel.');
        } else {
            // Redirect the logged-in user to the User Panel route
            return redirect()->route('front-end/user-lottery');
        }
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
    public function render()
    {
        return view('livewire.front-end.partial.header');
    }
}
