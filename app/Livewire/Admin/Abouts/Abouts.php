<?php

namespace App\Livewire\Admin\Abouts;

use App\Models\About;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\UploadedFile;
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
    public $abouts, $top_title, $title,
     $description_1, $description_2,
      $number_1, $title_1,
       $number_2, $title_2,
        $number_3, $title_3, 
        $aboutsId;

    public function mount()
    {
        $this->abouts = About::all();
    }
    protected $rules = [
        'top_title' =>'required',
        'title' =>'required',
        'description_1' =>'required',
        'description_2' =>'required',
        'number_1' =>'required',
        'title_1' =>'required',
        'number_2' =>'required',
        'title_2' =>'required',
        'number_3' =>'required',
        'title_3' =>'required',
    ];
    public function create(){
        $this->validate();
        $about = new About();
        $about->top_title = $this->top_title;
        $about->title = $this->title;   
        $about->description_1 = $this->description_1;
        $about->description_2 = $this->description_2;
        $about->number_1 = $this->number_1;
        $about->title_1 = $this->title_1;
        $about->number_2 = $this->number_2;
        $about->title_2 = $this->title_2;
        $about->number_3 = $this->number_3;
        $about->title_3 = $this->title_3;
        $about->save();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'About Added successfully!']);
        $this->alertMessage();
    }
    public function edit($id){
        $about = About::find($id);
        $this->aboutsId = $id;
        $this->top_title = $about->top_title;
        $this->title = $about->title;
        $this->description_1 = $about->description_1;
        $this->description_2 = $about->description_2;
        $this->number_1 = $about->number_1;
        $this->title_1 = $about->title_1;
        $this->number_2 = $about->number_2;
        $this->title_2 = $about->title_2;
        $this->number_3 = $about->number_3;
        $this->title_3 = $about->title_3;
    }
    public function update(){
        $this->validate();
        $about = About::find($this->aboutsId);
        $about->top_title = $this->top_title;
        $about->title = $this->title;   
        $about->description_1 = $this->description_1;
        $about->description_2 = $this->description_2;
        $about->number_1 = $this->number_1;
        $about->title_1 = $this->title_1;
        $about->number_2 = $this->number_2;
        $about->title_2 = $this->title_2;
        $about->number_3 = $this->number_3;
        $about->title_3 = $this->title_3;
        $about->save();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'About Updated successfully!']);
        $this->alertMessage();

    }
    public function delete($id){
        $about = About::find($id);
        $about->delete();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'About Deleted successfully!']);
        $this->alertMessage();
    }
    public function resetFields(){
        $this->top_title = '';
        $this->title = '';
        $this->description_1 = '';
        $this->description_2 = '';
        $this->number_1 = '';
        $this->title_1 = '';
        $this->number_2 = '';
        $this->title_2 = '';
        $this->number_3 = '';
        $this->title_3 = '';
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
        return view('livewire.admin.abouts.abouts');
    }
}
