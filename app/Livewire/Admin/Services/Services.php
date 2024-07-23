<?php

namespace App\Livewire\Admin\Services;

use App\Models\Massage;
use App\Models\Service;
use App\Models\ServicesTitle;
use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class Services extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $title, $short_description, $long_description, $image;
    public $serviceId;
    public $services, $servicesTitles;
    public function mount()
    {
        $this->services = Massage::all();
        $this->servicesTitles = ServicesTitle::all();
    }
    protected $rules = [
        'title' =>'required',
        'description' =>'required',
        'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
    ];
    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'long_description' => 'required|string',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('servicesImage', 'public');
        }

        Massage::create([
            'title' => $this->title,
            'short_description' => $this->short_description,
            'image' => $imagePath,
            'long_description' => $this->long_description,
        ]);

        session()->flash('message', 'Service created successfully.');
        $this->resetInputFields();
        $this->dispatch('serviceStore'); // Close modal using JavaScript
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->short_description = '';
        $this->long_description = '';
        $this->image = null;
    }

    public function edit($id)
    {
        $service = Massage::findOrFail($id);
        $this->serviceId = $id;
        $this->title = $service->title;
        $this->short_description = $service->short_description;
        $this->long_description = $service->long_description;
        $this->image = $service->image;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'long_description' => 'required|string',
        ]);

        $service = Massage::find($this->serviceId);
        $imagePath = $service->image;

        if ($this->image) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $imagePath = $this->image->store('servicesImage', 'public');
        }

        $service->update([
            'title' => $this->title,
            'short_description' => $this->short_description,
            'image' => $imagePath,
            'long_description' => $this->long_description,
        ]);

        session()->flash('message', 'Service updated successfully.');
        $this->resetInputFields();
        $this->dispatch('serviceUpdate'); // Close modal using JavaScript
    }

    public function delete($id)
    {
        $service = Massage::find($id);
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();

        session()->flash('message', 'Service deleted successfully.');
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => alert('background'),
        ]);
    }
    public function discardChanges()
    {
        $this->resetFields();
        $this->dispatch('hide-modal');
    }
    public function render()
    {
        return view('livewire.admin.services.services', [
            'services' => $this->services,
            'servicesTitles' => $this->servicesTitles,
        ]);
    }
}
