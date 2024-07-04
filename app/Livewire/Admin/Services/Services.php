<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Services extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $services;
    public $title,$description,$image;
    public $servicesId,$selectedservices;
    public $isOpen = false;
    public function mount()
    {
        $this->services = Service::all();
    }
    protected $rules = [
        'title' =>'required',
        'description' =>'required',
        'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
    ];
    public function create(){
        $this->validate();
    
        if ($this->image instanceof UploadedFile) {
            $this->image = $this->image->store('ServicesImages', 'public');
        }
        Service::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
        ]);
        $this->services = Service::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Services added successfully!']);
        $this->alertMessage('success', 'Operation success','Partner added successfully!');
    }
    public function edit($id){
        $service = Service::find($id);
        $this->servicesId = $service->id;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->image = $service->image;
        $this->dispatch('show-modal');
    }
    public function delete($id){
        $service = Service::find($id);
        $service->delete();
        $this->services = Service::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Services deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Services deleted successfully!');
    }
    public function update(){
        $service = Service::find($this->servicesId);
        $this->deleteImage(
            $service->image,$this->image
        );
        if ($this->image instanceof UploadedFile) {
            $this->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->image = $this->mage->store('ServicesImages', 'public');
            $service->image = $this->image;
            $service->save();
        }
        $service->title = $this->title;
        $service->description = $this->description;
        $service->save();
        $this->services = Service::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Services updated successfully!']);
        $this->alertMessage('success', 'Operation success','Services updated successfully!');
    }
    public function resetFields(){
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->servicesId = '';
        $this->selectedservices = '';
    }
    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
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
        return view('livewire.admin.services.services');
    }
}
