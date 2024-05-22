<?php

namespace App\Livewire\Admin\Pages\Faqs;

use App\Models\Faq;
use App\Models\FaqsCategory;
use App\Models\FaqTop;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]

class Faqs extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $faqs;
    public  $question, $answer;
    public $selectedFaqs, $faqsId;
    public $faqTops;
    public $subtitle, $title, $description;
    public $selectedfaqTops, $faqTopsId;
    public $faqsCategories;
    public $selectedCategoryId; 
    public $selectedCategories = [];
    public function mount()
    {
        $this->faqs = Faq::all();
        $this->selectedCategories = [];
        $this->faqTops = FaqTop::all();
        $this->faqsCategories = FaqsCategory::all(); 
        // $this->selectedCategoryId = $this->faqsCategories->first()->id ?? null;
    }
    protected $rules = [
        'question' =>'required',
        'answer' =>'required',
        'selectedCategories' => 'required|integer|min:1',
        'selectedCategories.*' => 'exists:categories,id',
    ];
   
    public function create(){
        $this->validate();
        $faq = Faq::create([
            'question' => $this->question,
            'answer' => $this->answer, 
        ]);
        $selectedCategoryIds = $this->selectedCategories;
        $faq->categories()->attach($selectedCategoryIds);
        $this->faqs = Faq::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Faq added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Faq added successfully!');
    }
    public function edit($faqsId){
        $this->selectedFaqs = Faq::find($faqsId);
        $this->faqsId = $faqsId;
        $this->question = $this->selectedFaqs->question;
        $this->answer = $this->selectedFaqs->answer;
    }
    public function update(){
        // dd($this->selectedCategories);
        $faq = Faq::find($this->faqsId);
        $this->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'selectedCategories' => 'required|integer|min:1',
            'selectedCategories.*' => 'exists:categories,id',
        ]);
    
        Faq::find($this->faqsId)->update([
            'question' => $this->question,
            'answer' => $this->answer,
        ]);
        $this->faqs = Faq::all();
        $selectedCategoryIds = $this->selectedCategories; 
        $faq->categories()->sync($selectedCategoryIds);
        
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Faq updated successfully!']);
        $this->alertMessage('success', 'Operation success','Faq updated successfully!');
    }
    public function delete($id){
        Faq::find($id)->delete();
        $this->faqs = Faq::all();
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Faq deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Faq deleted successfully!');
    }
    
    public function createFaqTops(){
        $this->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
    
        FaqTop::create([
           'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->faqTops = FaqTop::all();
        $this->resetFieldstop();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'faq added successfully!']);
        $this->alertMessage('success', 'Operation success','faq added successfully!');
    }
    public function editFaqTops($faqTopsId){
       $selectedfaqTops = FaqTop::find($faqTopsId);
        $this->faqTopsId = $faqTopsId;
        $this->subtitle = $selectedfaqTops->subtitle;
        $this->title = $selectedfaqTops->title;
        $this->description = $selectedfaqTops->description;

    }
    public function updateFaqTops(){
        $this->validate([
            'subtitle' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
    
        FaqTop::find($this->faqTopsId)->update([
           'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description
        ]);
        $this->faqTops = FaqTop::all();
        $this->resetFieldstop();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'faq updated successfully!']);
        $this->alertMessage('success', 'Operation success','faq updated successfully!');
    }
    public function deleteFaqTops($faqTopsId){
        FaqTop::find($faqTopsId)->delete();
        $this->faqTops = FaqTop::all();
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'faq deleted successfully!']);
        $this->alertMessage('success', 'Operation success','faq deleted successfully!');
    }

    public function resetFieldstop(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
    }
    public function resetFields(){
        $this->question = "";
        $this->answer = "";
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
        return view('livewire.admin.pages.faqs.faqs');
    }
}
