<?php

namespace App\Livewire\Admin\Home\Abouts;

use App\Models\About;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Abouts extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $abouts,
    $title_1, $description_1,$image_1,
    $title_2, $description_2,$image_2,
    $aboutId;  
    public $isOpen = false;
    protected $rules = [
        'title_1' =>'required',
        'description_1' =>'required',
        'image_1' =>'required|image',
        'title_2' =>'required',
        'description_2' =>'required',
        'image_2' =>'required|image',
    ];
    public function mount()
    {
        $this->abouts = About::all();
    }
    public function create(){
        $this->validate();
        if ($this->image_1 instanceof UploadedFile) {
            $this->image_1 = $this->image_1->store('AboutImage', 'public');
        }
        if ($this->image_2 instanceof UploadedFile) {
            $this->image_2 = $this->image_2->store('AboutImage', 'public');
        }
        About::create([
            'title_1' => $this->title_1,
            'description_1' => $this->description_1,
            'image_1' => $this->image_1,
            'title_2' => $this->title_2,
            'description_2' => $this->description_2,
            'image_2' => $this->image_2,
        ]);
        $this->abouts = About::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'About Added successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Added successfully!');
    }
    public function resetFields(){
        $this->title_1 = '';
        $this->description_1 = '';
        $this->image_1 = '';
        $this->title_2 = '';
        $this->description_2 = '';
        $this->image_2 = '';
    }
    public function edit($id){
        $this->aboutId = $id;
        $about = About::find($id);
        $this->title_1 = $about->title_1;
        $this->description_1 = $about->description_1;
        $this->image_1 = $about->image_1;
        $this->title_2 = $about->title_2;
        $this->description_2 = $about->description_2;
        $this->image_2 = $about->image_2;
        $this->dispatch('show-modal');
    }
    public function update(){
        $about = About::find($this->aboutId);
        $this->deleteImage($about->image_1, $this->image_1);
        $this->deleteImage($about->image_2, $this->image_2);
        if ($this->image_1 instanceof UploadedFile) {
            $this->validate([
                'image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->image_1 = $this->image_1->store('AboutImage', 'public');
            $about->image_1 = $this->image_1;
        }
        if ($this->image_2 instanceof UploadedFile) {
            $this->validate([
                'image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->image_2 = $this->image_2->store('AboutImage', 'public');
            $about->image_2 = $this->image_2;
        }
        $about->title_1 = $this->title_1;
        $about->description_1 = $this->description_1;
        $about->title_2 = $this->title_2;
        $about->description_2 = $this->description_2;
        $about->save();
        $this->abouts = About::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' =>'success','message' => 'About Updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Updated successfully!');
    }
    public function delete($id){
        $about = About::find($id);
        $this->deleteImage($about->image_1, $about->image_1);
        $this->deleteImage($about->image_2, $about->image_2);
        $about->delete();
        $this->abouts = About::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' =>'success','message' => 'About Deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Deleted successfully!');
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
        return view('livewire.admin.home.abouts.abouts');
    }
}
