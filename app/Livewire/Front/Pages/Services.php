<?php

namespace App\Livewire\Front\Pages;

use App\Models\AppointmentService;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServicesTitle;
use Livewire\Attributes\Layout;
use Illuminate\Http\Request;

#[Layout('layouts.front')]
class Services extends Component
{
    use WithPagination;

    public $categoryId;

    public function mount(Request $request)
    {
        $this->categoryId = $request->route('id');
    }

    public function render()
    {
        $title = ServicesTitle::first();

        if ($this->categoryId) {
            // Filter services by service_category_id if categoryId is provided
            $services = AppointmentService::where('service_category_id', $this->categoryId)
                ->select('id', 'service_name as title', 'description as short_description', 'image')
                ->paginate(9);
        } else {
            // Show all services if no categoryId is provided
            $services = AppointmentService::select('id', 'service_name as title', 'description as short_description', 'image')
                ->paginate(9);
        }

        return view('livewire.front.pages.services', [
            'services' => $services,
            'title' => $title,
        ]);
    }
}
