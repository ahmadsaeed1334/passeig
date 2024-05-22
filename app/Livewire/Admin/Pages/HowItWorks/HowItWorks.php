<?php

namespace App\Livewire\Admin\Pages\HowItWorks;

use App\Models\HowItWork;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class HowItWorks extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $howItWorks;
    public $subtitle, $title, $description;
    public $card_icon_1, $card_title_1, $card_description_1;
    public $card_icon_2, $card_title_2, $card_description_2;
    public $card_icon_3, $card_title_3, $card_description_3;
    public $selectedhowItWorks, $howItWorkId;
    public function mount() 
    {
        $this->howItWorks = HowItWork::all();
    }
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
    ];
    public function create(){
        $this->validate();
    
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->card_icon_1 = $this->card_icon_1->store('howItWordCardIcons', 'public');
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->card_icon_2 = $this->card_icon_2->store('howItWordCardIcons', 'public');
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->card_icon_3 = $this->card_icon_3->store('howItWordCardIcons', 'public');
        }

        HowItWork::create([
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

        ]);
        $this->howItWorks = HowItWork::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'HowItWork added successfully!']);
        $this->alertMessage('success', 'Operation success', 'HowItWork added successfully!');

    }
    public function edit($howItWorkId)
    {
        $this->howItWorkId = $howItWorkId;
        $howItWork = HowItWork::find($howItWorkId);
        $this->subtitle = $howItWork->subtitle;
        $this->title = $howItWork->title;
        $this->description = $howItWork->description;
        $this->card_icon_1 = $howItWork->card_icon_1;
        $this->card_title_1 = $howItWork->card_title_1;
        $this->card_description_1 = $howItWork->card_description_1;
        $this->card_icon_2 = $howItWork->card_icon_2;
        $this->card_title_2 = $howItWork->card_title_2;
        $this->card_description_2 = $howItWork->card_description_2;
        $this->card_icon_3 = $howItWork->card_icon_3;
        $this->card_title_3 = $howItWork->card_title_3;
        $this->card_description_3 = $howItWork->card_description_3;

    }
    public function update(){
        // $this->validate();
        $howItWork = HowItWork::find($this->howItWorkId);
        $this->deleteImage(
            $howItWork->card_icon_1,$this->card_icon_1
        );
        $this->deleteImage(
            $howItWork->card_icon_2,$this->card_icon_2
        );
        $this->deleteImage(
            $howItWork->card_icon_3,$this->card_icon_3
        );
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'card_icon_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_1 = $this->card_icon_1->store('howItWordCardIcons', 'public');
            $howItWork->card_icon_1 = $this->card_icon_1;
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'card_icon_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_2 = $this->card_icon_2->store('howItWordCardIcons', 'public');
            $howItWork->card_icon_2 = $this->card_icon_2;
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->validate([
                'card_icon_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_3 = $this->card_icon_3->store('howItWordCardIcons', 'public');
            $howItWork->card_icon_3 = $this->card_icon_3;
        }
        $howItWork->subtitle = $this->subtitle;
        $howItWork->title = $this->title;
        $howItWork->description = $this->description;
        $howItWork->card_title_1 = $this->card_title_1;
        $howItWork->card_description_1 = $this->card_description_1;
        $howItWork->card_title_2 = $this->card_title_2;
        $howItWork->card_description_2 = $this->card_description_2;
        $howItWork->card_title_3 = $this->card_title_3;
        $howItWork->card_description_3 = $this->card_description_3;
        $howItWork->save();
        $this->howItWorks = HowItWork::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'HowItWork updated successfully!']);
        $this->alertMessage('success', 'Operation success','HowItWork updated successfully!');

    }
    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
    }
    public function resetFields(){
        $this->subtitle = "";
        $this->title = "";
        $this->description = "";
        $this->card_icon_1 = "";
        $this->card_title_1 = "";
        $this->card_description_1 = "";
        $this->card_icon_2 = "";
        $this->card_title_2 = "";
        $this->card_description_2 = "";
        $this->card_icon_3 = "";
        $this->card_title_3 = "";
        $this->card_description_3 = "";
    }
    public function delete($howItWorkId)
    {
        HowItWork::find($howItWorkId)->delete();
        $this->howItWorks = HowItWork::all();
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'HowItWork deleted successfully!']);
        $this->alertMessage('success', 'Operation success','HowItWork deleted successfully!');
    }
    private function handleFileUpload($field)
    {
        if ($this->{$field} instanceof UploadedFile) {
            $extension = $this->{$field}->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $this->{$field} = $this->{$field}->storeAs('howItWordCardIcons', $filename, 'public');
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
        return view('livewire.admin.pages.how-it-works.how-it-works');
    }
}
