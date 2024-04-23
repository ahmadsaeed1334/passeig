<?php

namespace App\Livewire\Admin\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Sidebar extends Component
{
    public $route_name, $slides;
    protected $listeners = ['refreshData' => 'refreshData', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];


    public function mount()
    {
        $this->route_name = route_name();
        $data = json_decode(file_get_contents(storage_path('app/slides.json')), true);

        $slides = array_filter($data, function ($slide) {
            $slideTimestamp = strtotime($slide['date']);
            $nowTimestamp = time() + 5; // Add 5 seconds to the current timestamp
            return ($slide['user_id'] == auth()->id() || $slide['user_id'] == 0) && $slideTimestamp >= $nowTimestamp;
        });

        $this->slides = array_values($slides);
    }

    public function render()
    {
        return view('livewire.admin.partial.sidebar');
    }
}
