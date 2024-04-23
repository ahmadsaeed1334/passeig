<?php

namespace App\Livewire\Admin\Pages\Faqs;

use App\Models\Faq;
use App\Models\FaqsCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class FaqsCategories extends Component
{

    use LivewireAlert;
    use WithPagination;
    public $faqsCategories;
    public $faqsCategorieId;
    public $name;
    public $selectedCategoryId;
    protected $listeners = ['categorySelected'];
    public $faqs;
    public $description;
    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
    ];

    public function mount()
    {
        
        $this->faqsCategories = FaqsCategory::all();
        $this->faqs = Faq::all();
        $this->selectedCategoryId = $this->faqsCategories->first()->id ?? null;
    }
    public function create(){
        $this->validate();
        $slug = Str::slug($this->name);
        FaqsCategory::create([
            'name' => Str::title($this->name),
            'description' => $this->description,
            'slug' => $slug, // 
        ]);
       
        $this->faqsCategories = FaqsCategory::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Faqs Category added successfully!']);
        $this->alertMessage();
    }

    public function resetFields(){
        $this->name = "";
        $this->description = "";
    }
    public function edit($id){
        $this->selectedCategoryId = $id;
        $this->faqsCategorieId = $id;
        $this->name = $this->faqsCategories->find($id)->name;
        $this->description = $this->faqsCategories->find($id)->description;
    }
    public function update(){
        $this->validate();
        FaqsCategory::find($this->faqsCategorieId)->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->faqsCategories = FaqsCategory::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Faqs Category updated successfully!']);
        $this->alertMessage();
    }
    public function delete($id){
        $faqsCategories = FaqsCategory::find($id);
        $faqsCategories->delete();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' =>  ' Faqs Categories deleted successfully!']);
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
        return view('livewire.admin.pages.faqs.faqs-categories');
    }
}
