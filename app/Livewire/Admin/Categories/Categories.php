<?php

namespace App\Livewire\Admin\Categories;

use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Rinvex\Categories\Models\Category;
use App\Models\Categorie;
use App\Models\Product;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Categories extends Component
{

    use LivewireAlert;
    use WithPagination;
    // public $products;
    public $categories;
    public $categorieId;
    public $name;
    public $selectedCategoryId;
    public $description;
    public $isOpen = false;
    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
    ];
    public function mount()
    {
        
        $this->categories = Categorie::all();
        // $this->products = Product::all();
    }
    public function create(){
        $this->validate();
        Categorie::create([
            'name' => $this->name,
            'description' => $this->description,
           

        ]);
        // $this->categories->push($category); 
        $this->categories = Categorie::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Categories added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Categories added successfully!');
    }
    // public function edit($id)
    // {
    //     $category = Categorie::find($id);
    //     $this->categorieId = $id;
    //     $this->name = $category->name;
    //     $this->description = $category->description;
    // }
 
    public function edit($id)
    {
        $category = Categorie::find($id);
        if ($category) {
            $this->categorieId = $id;
            $this->name = $category->name;
            $this->description = $category->description;

            // Log for debugging
            Log::info("Category loaded for edit:", ['id' => $id, 'name' => $this->name, 'description' => $this->description]);
        }
    }

    
    // public function update(){
    //     $this->validate();
    //     $category = Categorie::find($this->categorieId);
    //     $category->update([
    //         'name' => $this->name,
    //         'description' => $this->description,
    //     ]);
    //     $this->categories = Categorie::all();
    //     $this->resetFields();
    //     $this->dispatch('hide-modal');
    //     $this->dispatch('showAlert', ['type' =>'success','message' => 'Categories updated successfully!']);
    //     $this->alertMessage('success', 'Operation success', 'Categories updated successfully!');
    // }
    public function update()
    {
        $this->validate();

        $category = Categorie::find($this->categorieId);
        if ($category) {
            $category->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);

            $this->categories = Categorie::all();
            $this->resetFields();
            $this->dispatch('hide-modal');
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Categories updated successfully!']);
            $this->alertMessage('success', 'Operation success', 'Categories updated successfully!');
        } else {
            Log::error("Category not found for update:", ['id' => $this->categorieId]);
        }
    }

    public function delete($id){
        $category = Categorie::find($id);
        $category->delete();
        $this->categories = Categorie::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' =>'success','message' => 'Categories deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'Categories deleted successfully!');
    }
    public function categorySelected($id){
        $this->selectedCategoryId = $id;
    }
    public function resetFields(){
        $this->name = '';
        $this->description = '';
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
        return view('livewire.admin.categories.categories');
    }
}
