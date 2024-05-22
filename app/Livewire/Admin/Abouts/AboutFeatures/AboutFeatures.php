<?php

namespace App\Livewire\Admin\Abouts\AboutFeatures;

use App\Models\AboutFeature;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]

class AboutFeatures extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    public $aboutfeatures,$aboutfeature, $image, 
    $subtitle, $title, $description,
    $inner_icon_1, $icon_title_1,
    $inner_icon_2, $icon_title_2,
    $inner_icon_3, $icon_title_3,
    $inner_icon_4, $icon_title_4,
    $inner_icon_5, $icon_title_5,
    $inner_icon_6, $icon_title_6,
    $aboutfeature_id;
   
    protected $rules = [
       'image' =>'required|nullable|image|max:3072',
       'subtitle' =>'required',
       'title' =>'required',
       'description' =>'required',
       'inner_icon_1' =>'required|nullable|image|max:3072',
       'icon_title_1' =>'required',
       'inner_icon_2' =>'required|nullable|image|max:3072',
       'icon_title_2' =>'required',
       'inner_icon_3' =>'required|nullable|image|max:3072',
       'icon_title_3' =>'required',
       'inner_icon_4' =>'required|nullable|image|max:3072',
       'icon_title_4' =>'required',
       'inner_icon_5' =>'required|nullable|image|max:3072',
       'icon_title_5' =>'required',
       'inner_icon_6' =>'required|nullable|image|max:3072',
       'icon_title_6' =>'required',
    ];
    public function mount(){
        $this->aboutfeatures = AboutFeature::all();
    }
    public function create(){
        $this->validate();
        if ($this->image instanceof UploadedFile) {
            $this->image = $this->image->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_1 instanceof UploadedFile) {
            $this->inner_icon_1 = $this->inner_icon_1->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_2 instanceof UploadedFile) {
            $this->inner_icon_2 = $this->inner_icon_2->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_3 instanceof UploadedFile) {
            $this->inner_icon_3 = $this->inner_icon_3->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_4 instanceof UploadedFile) {
            $this->inner_icon_4 = $this->inner_icon_4->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_5 instanceof UploadedFile) {
            $this->inner_icon_5 = $this->inner_icon_5->store('aboutFeactureIcons', 'public');
        }
        if ($this->inner_icon_6 instanceof UploadedFile) {
            $this->inner_icon_6 = $this->inner_icon_6->store('aboutFeactureIcons', 'public');
        }
        AboutFeature::create([
            'image' => $this->image,
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'inner_icon_1' => $this->inner_icon_1,
            'icon_title_1' => $this->icon_title_1,
            'inner_icon_2' => $this->inner_icon_2,
            'icon_title_2' => $this->icon_title_2,
            'inner_icon_3' => $this->inner_icon_3,
            'icon_title_3' => $this->icon_title_3,
            'inner_icon_4' => $this->inner_icon_4,
            'icon_title_4' => $this->icon_title_4,
            'inner_icon_5' => $this->inner_icon_5,
            'icon_title_5' => $this->icon_title_5,
            'inner_icon_6' => $this->inner_icon_6,
            'icon_title_6' => $this->icon_title_6,
        ]);
      $this->aboutfeatures = AboutFeature::all();
      $this->resetFields();
      $this->dispatch('hide-modal');
      $this->dispatch('showAlert', ['type' => 'success', 'message' => 'About Feacture added successfully!']);
      $this->alertMessage('success', 'Operation success', 'About Feacture added successfully!');


    }
    public function edit($id){
        $this->aboutfeature_id = $id;
        $this->aboutfeature = AboutFeature::find($id);
        $this->image = $this->aboutfeature->image;
        $this->subtitle = $this->aboutfeature->subtitle;
        $this->title = $this->aboutfeature->title;
        $this->description = $this->aboutfeature->description;
        $this->inner_icon_1 = $this->aboutfeature->inner_icon_1;
        $this->icon_title_1 = $this->aboutfeature->icon_title_1;
        $this->inner_icon_2 = $this->aboutfeature->inner_icon_2;
        $this->icon_title_2 = $this->aboutfeature->icon_title_2;
        $this->inner_icon_3 = $this->aboutfeature->inner_icon_3;
        $this->icon_title_3 = $this->aboutfeature->icon_title_3;
        $this->inner_icon_4 = $this->aboutfeature->inner_icon_4;
        $this->icon_title_4 = $this->aboutfeature->icon_title_4;
        $this->inner_icon_5 = $this->aboutfeature->inner_icon_5;
        $this->icon_title_5 = $this->aboutfeature->icon_title_5;
        $this->inner_icon_6 = $this->aboutfeature->inner_icon_6;
        $this->icon_title_6 = $this->aboutfeature->icon_title_6;
        $this->dispatch('open-modal');
    }
    public function update(){
        $aboutfeature =  AboutFeature::find($this->aboutfeature_id);
           // Delete existing images
           
    // Delete existing images for the icons being updated
    $this->deleteImage($aboutfeature->image , $this->image);
    if ($this->image instanceof UploadedFile) {
        $this->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->image = $this->image->store('aboutFeactureIcons', 'public');
        $aboutfeature->image = $this->image;
    }

    // Repeat the above process for each inner icon
    $this->deleteImage($aboutfeature->inner_icon_1 , $this->inner_icon_1);
    if ($this->inner_icon_1 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_1 = $this->inner_icon_1->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_1 = $this->inner_icon_1;
    }
    $this->deleteImage($aboutfeature->inner_icon_2 , $this->inner_icon_2);
    if ($this->inner_icon_2 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_2 = $this->inner_icon_2->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_2 = $this->inner_icon_2;
    }
    $this->deleteImage($aboutfeature->inner_icon_3 , $this->inner_icon_3);
    if ($this->inner_icon_3 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_3 = $this->inner_icon_3->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_3 = $this->inner_icon_3;
    }
    $this->deleteImage($aboutfeature->inner_icon_4 , $this->inner_icon_4);
    if ($this->inner_icon_4 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_4 = $this->inner_icon_4->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_4 = $this->inner_icon_4;
    }
    $this->deleteImage($aboutfeature->inner_icon_5, $this->inner_icon_5);
    if ($this->inner_icon_5 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_5 = $this->inner_icon_5->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_5 = $this->inner_icon_5;
    }
    $this->deleteImage($aboutfeature->inner_icon_6, $this->inner_icon_6);
    if ($this->inner_icon_6 instanceof UploadedFile) {
        $this->validate([
            'inner_icon_6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        ]);
        $this->inner_icon_6 = $this->inner_icon_6->store('aboutFeactureIcons', 'public');
        $aboutfeature->inner_icon_6 = $this->inner_icon_6;
    }
        $aboutfeature->subtitle = $this->subtitle;
        $aboutfeature->title = $this->title;
        $aboutfeature->description = $this->description;
        $aboutfeature->icon_title_1 = $this->icon_title_1;
        $aboutfeature->icon_title_2 = $this->icon_title_2;
        $aboutfeature->icon_title_3 = $this->icon_title_3;
        $aboutfeature->icon_title_4 = $this->icon_title_4;
        $aboutfeature->icon_title_5 = $this->icon_title_5;
        $aboutfeature->icon_title_6 = $this->icon_title_6;
        $aboutfeature->save();
        $this->aboutfeatures = AboutFeature::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'About Feacture updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Feacture updated successfully!');
    }
    protected function deleteImage($oldImagePath, $newImage)
{
    if ($newImage instanceof UploadedFile) {
        if ($oldImagePath) {
            Storage::disk('public')->delete($oldImagePath);
        }
    }
}
    public function delete($id){
        AboutFeature::find($id)->delete();
        $this->aboutfeatures = AboutFeature::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'About Feacture deleted successfully!']);
        $this->alertMessage('success', 'Operation success','About Feacture deleted successfully!');
    }
     
    private function handleFileUpload($field)
    {
        if ($this->{$field} instanceof UploadedFile) {
            $extension = $this->{$field}->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $this->{$field} = $this->{$field}->storeAs('featureCardIcons', $filename, 'public');
        }
    }

    public function resetFields(){
        $this->title = '';
        $this->subtitle = '';
        $this->description = '';
        $this->image = '';
        $this->inner_icon_1 = '';
        $this->icon_title_1 = '';
        $this->inner_icon_2 = '';
        $this->icon_title_2 = '';
        $this->inner_icon_3 = '';
        $this->icon_title_3 = '';
        $this->inner_icon_4 = '';
        $this->icon_title_4 = '';
        $this->inner_icon_5 = '';
        $this->icon_title_5 = '';
        $this->inner_icon_6 = '';
        $this->icon_title_6 = '';
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
        return view('livewire.admin.abouts.about-features.about-features');
    }
}
