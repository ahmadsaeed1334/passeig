<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class ServicePreview extends Component
{
    public $title = '';
    public $short_description = '';
    public $long_description = '';
    public $image = '';

    protected $listeners = [
        'updatePreview' => 'updatePreview'
    ];

    public function updatePreview($data)
    {
        $this->title = $data['title'] ?? '';
        $this->short_description = $data['short_description'] ?? '';
        $this->image = $data['image'] ?? '';
        $this->long_description = $data['long_description'] ?? '';
    }
    public function render()
    {
        return view('livewire.front.service-preview');
    }
}
