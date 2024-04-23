<?php

namespace App\Livewire\Admin\Home;

use App\Models\HowToPlay;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\UploadedFile;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class HowToPlays extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    public $howToPlays;
    public $subtitle, $title, $description;
    public $play_card_icon_1, $play_card_title_1, $play_card_description_1;
    public $play_card_icon_2, $play_card_title_2, $play_card_description_2;
    public $play_card_icon_3, $play_card_title_3, $play_card_description_3;
    public $selectedHowToPlay, $howToPlayId;

    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'play_card_icon_1' => 'required|nullable|image|max:3072',
        'play_card_title_1' => 'required|nullable|string',
        'play_card_description_1' => 'required|nullable|string',
        'play_card_icon_2' => 'required|nullable|image|max:3072',
        'play_card_title_2' => 'required|nullable|string',
        'play_card_description_2' => 'required|nullable|string',
        'play_card_icon_3' => 'required|nullable|image|max:3072',
        'play_card_title_3' => 'required|nullable|string',
        'play_card_description_3' => 'required|nullable|string',
    ];

    public function mount()
    {
        $this->howToPlays = HowToPlay::all();
    }

    public function create(){
        $this->validate();
    
        if ($this->play_card_icon_1 instanceof UploadedFile) {
            $this->play_card_icon_1 = $this->play_card_icon_1->store('playCardIcons', 'public');
        }
        if ($this->play_card_icon_2 instanceof UploadedFile) {
            $this->play_card_icon_2 = $this->play_card_icon_2->store('playCardIcons', 'public');
        }
        if ($this->play_card_icon_3 instanceof UploadedFile) {
            $this->play_card_icon_3 = $this->play_card_icon_3->store('playCardIcons', 'public');
        }
        HowToPlay::create([
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'play_card_icon_1' => $this->play_card_icon_1 ?? null,
            'play_card_title_1' => $this->play_card_title_1,
            'play_card_description_1' => $this->play_card_description_1,
            'play_card_icon_2' => $this->play_card_icon_2 ?? null,
            'play_card_title_2' => $this->play_card_title_2,
            'play_card_description_2' => $this->play_card_description_2,
            'play_card_icon_3' => $this->play_card_icon_3 ?? null,
            'play_card_title_3' => $this->play_card_title_3,
            'play_card_description_3' => $this->play_card_description_3,
        ]);
   
    $this->howToPlays = HowToPlay::all();
    $this->resetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'success', 'message' => 'How to Play added successfully!']);
    $this->alertMessage();
      
    }
    public function edit($howToPlayId){
        $this->howToPlayId = $howToPlayId;
        $this->selectedHowToPlay = HowToPlay::find($howToPlayId);
        $this->subtitle = $this->selectedHowToPlay->subtitle;
        $this->title = $this->selectedHowToPlay->title;
        $this->description = $this->selectedHowToPlay->description;
        $this->play_card_icon_1 = $this->selectedHowToPlay->play_card_icon_1;
        $this->play_card_title_1 = $this->selectedHowToPlay->play_card_title_1;
        $this->play_card_description_1 = $this->selectedHowToPlay->play_card_description_1;
        $this->play_card_icon_2 = $this->selectedHowToPlay->play_card_icon_2;
        $this->play_card_title_2 = $this->selectedHowToPlay->play_card_title_2;
        $this->play_card_description_2 = $this->selectedHowToPlay->play_card_description_2;
        $this->play_card_icon_3 = $this->selectedHowToPlay->play_card_icon_3;
        $this->play_card_title_3 = $this->selectedHowToPlay->play_card_title_3;
        $this->play_card_description_3 = $this->selectedHowToPlay->play_card_description_3;

    }
    public function update(){
        $howToPlay = HowToPlay::find($this->howToPlayId);
       
        if ($this->play_card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'play_card_icon_1' => 'required|image|max:3072',
            ]);
            $this->play_card_icon_1 = $this->play_card_icon_1->store('playCardIcons', 'public');
            $howToPlay->play_card_icon_1 = $this->play_card_icon_1;
        }
        if ($this->play_card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'play_card_icon_2' => 'required|image|max:3072',
            ]);
            $this->play_card_icon_2 = $this->play_card_icon_2->store('playCardIcons', 'public');
            $howToPlay->play_card_icon_2 = $this->play_card_icon_2;
        }
        if ($this->play_card_icon_3 instanceof UploadedFile) {
            $this->validate([
                'play_card_icon_3' => 'required|image|max:3072',
            ]);
            $this->play_card_icon_3 = $this->play_card_icon_3->store('playCardIcons', 'public');
            $howToPlay->play_card_icon_3 = $this->play_card_icon_3;
        }
        $howToPlay->subtitle = $this->subtitle;
        $howToPlay->title = $this->title;
        $howToPlay->description = $this->description;
        $howToPlay->play_card_title_1 = $this->play_card_title_1;
        $howToPlay->play_card_description_1 = $this->play_card_description_1;
        $howToPlay->play_card_title_2 = $this->play_card_title_2;
        $howToPlay->play_card_description_2 = $this->play_card_description_2;
        $howToPlay->play_card_title_3 = $this->play_card_title_3;
        $howToPlay->play_card_description_3 = $this->play_card_description_3;
        $howToPlay->save();
        $this->howToPlays = HowToPlay::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Hero Banner updated successfully!']);
        $this->alertMessage();
    }
    private function handleFileUpload($field)
{
    if ($this->{$field} instanceof UploadedFile) {
        $extension = $this->{$field}->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $this->{$field} = $this->{$field}->storeAs('playCardIcons', $filename, 'public');
    }
}


    public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->play_card_icon_1 = '';
        $this->play_card_title_1 = '';
        $this->play_card_description_1 = '';
        $this->play_card_icon_2 = '';
        $this->play_card_title_2 = '';
        $this->play_card_description_2 = '';
        $this->play_card_icon_3 = '';
        $this->play_card_title_3 = '';
        $this->play_card_description_3 = '';
    }




    public function render()
    {
        return view('livewire.admin.home.how-to-plays');
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
}
