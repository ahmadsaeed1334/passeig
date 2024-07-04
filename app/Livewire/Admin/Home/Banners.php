<?php

namespace App\Livewire\Admin\Home;

use App\Models\Banner;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Banners extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    public $banners;
    public $banner_image;
    public $bannerId,$selectedbanners;
    public $isOpen = false;
    public function mount()
    {
        $this->banners = Banner::all();
    }
    protected $rules = [
        'banner_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
    ];

    public function create(){
        $this->validate();
    
        if ($this->banner_image instanceof UploadedFile) {
            $this->banner_image = $this->banner_image->store('BannerImages', 'public');
        }
        // $this->handleFileUpload('banner_image');
        Banner::create([
            'banner_image' => $this->banner_image,
        ]);
        $this->banners = Banner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Banner added successfully!']);
        $this->alertMessage('success', 'Operation success','Banner added successfully!');
    }
    public function resetFields(){
        $this->banner_image = "";
    }

    public function edit($id){
        $this->bannerId = $id;
        $this->selectedbanners = Banner::find($id);
        $this->banner_image = $this->selectedbanners->banner_image;

        $this->dispatch('show-modal');
    }

    public function update(){
        $banners = Banner::find($this->bannerId);
        $this->deleteImage(
            $banners->banner_image,$this->banner_image
        );
        if ($this->banner_image instanceof UploadedFile) {
            $this->validate([
                'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->banner_image = $this->banner_image->store('BannerImages', 'public');
            $banners->banner_image = $this->banner_image;
            $banners->save();
        }
        $this->banners = Banner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' =>'success','message' => 'Banner updated successfully!']);
        $this->alertMessage('success', 'Operation success','Banner updated successfully!');
    }

    public function delete($id){
        // $this->selectedbanners = Banner::find($id);
        $banners = Banner::find($id);

        $this->deleteImage(
            $banners->banner_image,$this->banner_image
        );
        $banners->delete();
        // $this->banners = Banner::all();
        $this->dispatch('showAlert', ['type' =>'success','message' => 'Banner deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Banner deleted successfully!');
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
        return view('livewire.admin.home.banners');
    }
}
