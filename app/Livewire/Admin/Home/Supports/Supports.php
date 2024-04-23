<?php

namespace App\Livewire\Admin\Home\Supports;

use App\Models\Support;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Supports extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    
    public $supports,
    $subtitle, $title, $description,
    $card_icon_1, $card_title_1, $card_description_1,
    $card_number_1, $card_email_1,
    $card_icon_2, $card_title_2, $card_description_2,
    $support_id, $selectedsupport;
    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'card_icon_1' => 'required|nullable|image|max:3072',
        'card_title_1' => 'required||string',
        'card_description_1' => 'required||string',
        'card_number_1' => 'required||string',
        'card_email_1' => 'required||string',
        'card_icon_2' => 'required||image|max:3072',
        'card_title_2' => 'required||string',
        'card_description_2' => 'required||string',

    ];
    public function mount()
    {
        $this->supports = Support::all();
    }
    public function create(){
        $this->validate();
    
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->card_icon_1 = $this->card_icon_1->store('supportsIcon', 'public');
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->card_icon_2 = $this->card_icon_2->store('supportsIcon', 'public');
        }
        Support::create([
         'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'card_icon_1' => $this->card_icon_1,
            'card_title_1' => $this->card_title_1,
            'card_description_1' => $this->card_description_1,
            'card_number_1' => $this->card_number_1,
            'card_email_1' => $this->card_email_1,
            'card_icon_2' => $this->card_icon_2,
            'card_title_2' => $this->card_title_2,
            'card_description_2' => $this->card_description_2,
        ]);
        $this->supports = Support::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Support added successfully!']);
        $this->alertMessage();
    }

    public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->card_icon_1 = '';
        $this->card_title_1 = '';
        $this->card_description_1 = '';
        $this->card_number_1 = '';
        $this->card_email_1 = '';
        $this->card_icon_2 = '';
        $this->card_title_2 = '';
        $this->card_description_2 = '';
    }
    public function edit($id){
        $this->selectedsupport = Support::find($id);
        $this->subtitle = $this->selectedsupport->subtitle;
        $this->title = $this->selectedsupport->title;
        $this->description = $this->selectedsupport->description;
        $this->card_icon_1 = $this->selectedsupport->card_icon_1;
        $this->card_title_1 = $this->selectedsupport->card_title_1;
        $this->card_description_1 = $this->selectedsupport->card_description_1;
        $this->card_number_1 = $this->selectedsupport->card_number_1;
        $this->card_email_1 = $this->selectedsupport->card_email_1;
        $this->card_icon_2 = $this->selectedsupport->card_icon_2;
        $this->card_title_2 = $this->selectedsupport->card_title_2;
        $this->card_description_2 = $this->selectedsupport->card_description_2;
        $this->support_id = $this->selectedsupport->id;
       
    }

    public function update(){
        $support = Support::find($this->support_id);
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'card_icon_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_1 = $this->card_icon_1->store('supportsIcon', 'public');
            $support->card_icon_1 = $this->card_icon_1;
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'card_icon_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_2 = $this->card_icon_2->store('supportsIcon', 'public');
            $support->card_icon_2 = $this->card_icon_2;
        }
        $support->subtitle = $this->subtitle;
        $support->title = $this->title;
        $support->description = $this->description;
        $support->card_title_1 = $this->card_title_1;
        $support->card_description_1 = $this->card_description_1;
        $support->card_number_1 = $this->card_number_1;
        $support->card_email_1 = $this->card_email_1;
        $support->card_title_2 = $this->card_title_2;
        $support->card_description_2 = $this->card_description_2;
        $support->save();
        $this->supports = Support::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Support updated successfully!']);
        $this->alertMessage();
    }
    public function delete($id){
        Support::find($id)->delete();
        $this->supports = Support::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'Support deleted successfully!']);
        $this->alertMessage();
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
        return view('livewire.admin.home.supports.supports');
    }
}
