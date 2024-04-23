<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Categorie;
use App\Models\Giveaway;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Http\UploadedFile;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Rinvex\Categories\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Categories extends Component
{

    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    public $categories;
    public $categorieId;
    public $name;
    public $selectedCategoryId;
    protected $listeners = ['categorySelected'];
    public $giveaways;

    public $description;
    public $icon;
    protected $rules = [
        'name' => 'required|string|max:255',
        'icon' => 'nullable|image|max:2048', // 2MB Max
        'description' => 'nullable|string|max:255',
    ];

    // public function filterGiveaways($categoryId = null)
    // {
    //     $this->selectedCategoryId = $categoryId;
    //     $this->giveaways = Giveaway::when($categoryId, function ($query) use ($categoryId) {
    //         return $query->whereHas('categories', function ($query) use ($categoryId) {
    //             $query->where('categories.id', $categoryId);
    //         });
    //     })->get();
    // }
    
    public function mount()
    {
        
        $this->categories = Categorie::all();
        $this->giveaways = Giveaway::all();
        $this->selectedCategoryId = $this->categories->first()->id ?? null;
    }
    public function selectCategory($categorieId)
    {
        $this->selectedCategoryId = $categorieId;
        dd( $this->selectedCategoryId);
    }

    public function categorySelected($categorieId)
    {
        $this->selectedCategoryId = $categorieId;
    }

    public function create(){
        $this->validate();
        if ($this->icon instanceof UploadedFile) {
            $this->icon = $this->icon->store('Categories', 'public');
        }

        Categorie::create([
            'name' => $this->name,
            'icon' => $this->icon,
            'description' => $this->description,

        ]);
        // $this->categories->push($category); 
        $this->categories = Categorie::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Categories added successfully!']);
        $this->alertMessage();
    }
    public function resetFields(){
        $this->name = '';
        $this->icon = '';
        $this->description = '';
    }
    public function edit($id){
        $category = Categorie::find($id);
        $this->categorieId = $id;
        $this->name = $category->name;
        $this->icon = $category->icon;
        $this->description = $category->description;
    }
    public function update(){
        $category = Categorie::find($this->categorieId);
        if ($this->icon instanceof UploadedFile) {
            $this->validate([
                'icon' => 'image|max:2048', // 2MB Max
            ]);
            $this->icon = $this->icon->store('Categories', 'public');
            $category->icon = $this->icon;
        }
        $category->name = $this->name;
        $category->slug = Str::slug($this->name);
        $category->description = $this->description;
        $category->save();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Categories updated successfully!']);
        $this->alertMessage();
    }

    public function delete($id){
        $category = Categorie::find($id);
        $category->delete();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Categories deleted successfully!']);
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

    private function handleFileUpload($field)
    {
        if ($this->{$field} instanceof UploadedFile) {
            $extension = $this->{$field}->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $this->{$field} = $this->{$field}->storeAs('Categories', $filename, 'public');
        }
    }

    public function render()
    {
        return view('livewire.admin.categories.categories');
    }
}
