<?php

namespace App\Livewire\Admin\Partial;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Facades\UtilityFacades;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Navbar extends Component
{
    protected $listeners = ['refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public $routeName, $user, $languages;

    public function setLang($lang)
    {
        $this->user->update([
            'lang' => $lang
        ]);
        $this->dispatch('reloadPage');
    }

    public function mount()
    {
        $this->routeName = Str::substr(route_name(), 0, 4);
        // dd($this->routeName);
        $this->user = auth()->user();
    }

    public function render()
    {
        $this->languages = UtilityFacades::languages();
        return view('livewire.admin.partial.navbar');
    }
}
