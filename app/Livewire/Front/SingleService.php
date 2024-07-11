<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Massage;
#[Layout('layouts.front')]
class SingleService extends Component
{
    public $service;
    public $serviceId;
    public function mount($id)
    {
        $this->serviceId = $id;
        $this->service = Massage::findOrFail($id);
    }

    public function render()
    {
        $relatedServices = Massage::where('id', '!=', $this->serviceId)->take(4)->get();

        return view('livewire.front.single-service', [
            'service' => $this->service,
            'relatedServices' => $relatedServices
        ]);
    }
}
