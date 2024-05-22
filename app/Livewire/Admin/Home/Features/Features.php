<?php

namespace App\Livewire\Admin\Home\Features;

use App\Models\Feature;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Features extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $features;
    public $subtitle, $title, $description;
    public $card_icon_1, $card_title_1, $card_description_1;
    public $card_icon_2, $card_title_2, $card_description_2;
    public $card_icon_3, $card_title_3, $card_description_3;
    public $card_icon_4, $card_title_4, $card_description_4;
    public $selectedFeatures, $featureId;

    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'card_icon_1' => 'required|nullable||image|max:3072',
        'card_title_1' => 'required|nullable|string',
        'card_description_1' => 'required|nullable|string',
        'card_icon_2' => 'required|nullable||image|max:3072',
        'card_title_2' => 'required|nullable|string',
        'card_description_2' => 'required|nullable|string',
        'card_icon_3' => 'required|nullable||image|max:3072',
        'card_title_3' => 'required|nullable|string',
        'card_description_3' => 'required|nullable|string',
        'card_icon_4' => 'required|nullable||image|max:3072',
        'card_title_4' => 'required|nullable|string',
        'card_description_4' => 'required|nullable|string',
    ];

    public function mount()
    {
        $this->features = Feature::all();
    }
    public function create(){
        $this->validate();
    
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->card_icon_1 = $this->card_icon_1->store('featureCardIcons', 'public');
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->card_icon_2 = $this->card_icon_2->store('featureCardIcons', 'public');
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->card_icon_3 = $this->card_icon_3->store('featureCardIcons', 'public');
        }
        if ($this->card_icon_4 instanceof UploadedFile) {
            $this->card_icon_4 = $this->card_icon_4->store('featureCardIcons', 'public');
        }

        Feature::create([
          'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'card_icon_1' => $this->card_icon_1,
            'card_title_1' => $this->card_title_1,
            'card_description_1' => $this->card_description_1,
            'card_icon_2' => $this->card_icon_2,
            'card_title_2' => $this->card_title_2,
            'card_description_2' => $this->card_description_2,
            'card_icon_3' => $this->card_icon_3,
            'card_title_3' => $this->card_title_3,
            'card_description_3' => $this->card_description_3,
            'card_icon_4' => $this->card_icon_4,
            'card_title_4' => $this->card_title_4,
            'card_description_4' => $this->card_description_4,

        ]);
        $this->features = Feature::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Feature added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Feature added successfully!');

    }
    public function edit($featureId)
    {
        $this->featureId = $featureId;
        $feature = Feature::find($featureId);
        $this->subtitle = $feature->subtitle;
        $this->title = $feature->title;
        $this->description = $feature->description;
        $this->card_icon_1 = $feature->card_icon_1;
        $this->card_title_1 = $feature->card_title_1;
        $this->card_description_1 = $feature->card_description_1;
        $this->card_icon_2 = $feature->card_icon_2;
        $this->card_title_2 = $feature->card_title_2;
        $this->card_description_2 = $feature->card_description_2;
        $this->card_icon_3 = $feature->card_icon_3;
        $this->card_title_3 = $feature->card_title_3;
        $this->card_description_3 = $feature->card_description_3;
        $this->card_icon_4 = $feature->card_icon_4;
        $this->card_title_4 = $feature->card_title_4;
        $this->card_description_4 = $feature->card_description_4;
        
    }
    public function update()
    {
        $feature = Feature::find($this->featureId);
        $this->deleteImage($feature->card_icon_1, $this->card_icon_1);
        $this->deleteImage($feature->card_icon_2, $this->card_icon_2);
        $this->deleteImage($feature->card_icon_3, $this->card_icon_3);
        $this->deleteImage($feature->card_icon_4, $this->card_icon_4);
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'card_icon_1' => 'required|image|max:3072',
            ]);
            $this->card_icon_1 = $this->card_icon_1->store('featureCardIcons', 'public');
            $feature->card_icon_1 = $this->card_icon_1;
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'card_icon_2' => 'required|image|max:3072',
            ]); 
            $this->card_icon_2 = $this->card_icon_2->store('featureCardIcons', 'public');
            $feature->card_icon_2 = $this->card_icon_2;
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->validate([
                'card_icon_3' => 'required|image|max:3072',
            ]);
            $this->card_icon_3 = $this->card_icon_3->store('featureCardIcons', 'public');
            $feature->card_icon_3 = $this->card_icon_3;
        }
        if ($this->card_icon_4 instanceof UploadedFile) {
            $this->validate([
                'card_icon_4' => 'required|image|max:3072',
            ]);
            $this->card_icon_4 = $this->card_icon_4->store('featureCardIcons', 'public');
            $feature->card_icon_4 = $this->card_icon_4;
        }
      
        $feature->subtitle = $this->subtitle;
        $feature->title = $this->title;
        $feature->description = $this->description; 
        $feature->card_title_1 = $this->card_title_1;
        $feature->card_description_1 = $this->card_description_1;    
        $feature->card_title_2 = $this->card_title_2;
        $feature->card_description_2 = $this->card_description_2;      
        $feature->card_title_3 = $this->card_title_3;
        $feature->card_description_3 = $this->card_description_3;
        $feature->card_title_4 = $this->card_title_4;
        $feature->card_description_4 = $this->card_description_4;
        $feature->save();
        $this->features = Feature::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Feature updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'Feature updated successfully!');

    }
    public function delete($featureId)
        {
            $feature = Feature::find($featureId);
            $this->deleteImage($feature->card_icon_1, $this->card_icon_1);
            $feature->delete();
            $this->features = Feature::all();
            $this->dispatch('hide-modal');
            $this->dispatch('showAlert', ['type' => 'danger','message' => 'Feature deleted successfully!']);
            $this->alertMessage('success', 'Operation success', 'Feature deleted successfully!');

        }
        protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
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
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->card_icon_1 = '';
        $this->card_title_1 = '';
        $this->card_description_1 = '';
        $this->card_icon_2 = '';
        $this->card_title_2 = '';
        $this->card_description_2 = '';
        $this->card_icon_3 = '';
        $this->card_title_3 = '';
        $this->card_description_3 = '';
        $this->card_icon_4 = '';
        $this->card_title_4 = '';
        $this->card_description_4 = '';
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
        return view('livewire.admin.home.features.features');
    }

}
