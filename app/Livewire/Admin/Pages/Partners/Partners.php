<?php

namespace App\Livewire\Admin\Pages\Partners;

use App\Models\Partner;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]

class Partners extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $partners;
    public $partner_image;
    public $partnerId,$selectedpartners;

    public function mount()
    {
        $this->partners = Partner::all();
    }
    
    protected $rules = [
        'partner_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
    ];

    public function create(){
        $this->validate();
    
        // if ($this->partner_image instanceof UploadedFile) {
        //     $this->partner_image = $this->partner_image->store('PartnerImages', 'public');
        // }
        $this->handleFileUpload('partner_image');
        Partner::create([
            'partner_image' => $this->partner_image,
        ]);
        $this->partners = Partner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Partner added successfully!']);
        $this->alertMessage();
    }
    public function resetFields(){
        $this->partner_image = "";
    }
    public function edit($id){
        $this->partnerId = $id;
        $this->selectedpartners = Partner::find($id);
        $this->partner_image = $this->selectedpartners->partner_image;

    }

    public function update(){
        $partner = Partner::find($this->partnerId);
        if ($this->partner_image instanceof UploadedFile) {
            $this->validate([
                'partner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->partner_image = $this->partner_image->store('PartnerImages', 'public');
            $partner->partner_image = $this->partner_image;
            $partner->save();
        }
        $this->partners = Partner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Partner updated successfully!']);
        $this->alertMessage();
    }
    public function delete($id){
        Partner::find($id)->delete();
        $this->partners = Partner::all();
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Partner deleted successfully!']);
        $this->alertMessage();
    }
    private function handleFileUpload($field)
    {
        
        if ($this->{$field} instanceof UploadedFile) {
            $this->{$field} = $this->{$field}->store('PartnerImages', 'public');
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
        $this->dispatch('hide-modal'); // You may need to handle modal hiding through JavaScript
    }

    public function render()
    {
        return view('livewire.admin.pages.partners.partners');
    }
}
