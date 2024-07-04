<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Partners extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name;
    public $partners;
    public $partner_image;
    public $partnerId,$selectedpartners;
    public $isOpen = false;
    public function mount()
    {
        $this->partners = Partner::all();
    }
    
    protected $rules = [
        'name' =>'required',
        'partner_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
    ];

    public function create(){
        $this->validate();
    
        if ($this->partner_image instanceof UploadedFile) {
            $this->partner_image = $this->partner_image->store('PartnerImages', 'public');
        }
        // $this->handleFileUpload('partner_image');
        Partner::create([
            'name' => $this->name,
            'partner_image' => $this->partner_image,
        ]);
        $this->partners = Partner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Partner added successfully!']);
        $this->alertMessage('success', 'Operation success','Partner added successfully!');
    }
    public function resetFields(){
        $this->name = "";
        $this->partner_image = "";
    }
    public function edit($id){
        $this->partnerId = $id;
        $this->selectedpartners = Partner::find($id);
        $this->name = $this->selectedpartners->name;
        $this->partner_image = $this->selectedpartners->partner_image;
    }
    public function update(){
        $partner = Partner::find($this->partnerId);
        $this->deleteImage(
            $partner->partner_image,$this->partner_image
        );
        if ($this->partner_image instanceof UploadedFile) {
            $this->validate([
                'partner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->partner_image = $this->partner_image->store('PartnerImages', 'public');
            $partner->partner_image = $this->partner_image;
            $partner->save();
        }
        $partner->name = $this->name;
        $partner->save();
        $this->partners = Partner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Partner updated successfully!']);
        $this->alertMessage('success', 'Operation success','Partner updated successfully!');
    }
    public function delete($id){
        $partner = Partner::find($id);
        // $this->partners = Partner::all();
        $this->deleteImage(
            $partner->partner_image,$this->partner_image
        );
        $partner->delete();
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Partner deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Partner deleted successfully!');
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
        return view('livewire.admin.partners.partners');
    }
}
