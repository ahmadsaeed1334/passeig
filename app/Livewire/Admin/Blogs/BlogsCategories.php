<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use App\Models\BlogCategorie;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Rinvex\Categories\Models\Category;
use App\Models\Categorie;
use App\Models\Product;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class BlogsCategories extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $blogs;
    public $blogCategories;
    public $blogCategorieId;
    public $name;
    public $blogselectedCategoryId;
    public $description;
    public $isOpen = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:255',
    ];
    public function mount()
    {

        $this->blogCategories = BlogCategorie::all();
        // $this->blogs = Blog::all();
    }
    public function create(){
        $this->validate();
        BlogCategorie::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        // $this->categories->push($category);
        $this->blogCategories = BlogCategorie::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Categories added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Categories added successfully!');
    }
    public function edit($id)
    {
        $category = BlogCategorie::find($id);
        if ($category) {
            $this->blogselectedCategoryId = $id;
            $this->name = $category->name;
            $this->description = $category->description;

            // Log for debugging
            Log::info("Category loaded for edit:", ['id' => $id, 'name' => $this->name, 'description' => $this->description]);
        }
    }

    public function update()
    {
        $this->validate();

        $category = BlogCategorie::find($this->blogselectedCategoryId);
        if ($category) {
            $category->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);
            $this->blogCategories = BlogCategorie::all();
            $this->resetFields();
            $this->dispatch('hide-modal');
            $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Categories updated successfully!']);
            $this->alertMessage('success', 'Operation success', 'Categories updated successfully!');
        } else {
            Log::error("Category not found for update:", ['id' => $this->categorieId]);
        }
    }
    public function delete($id){
        $category = BlogCategorie::find($id);
        $category->delete();
        $this->blogCategories = BlogCategorie::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' =>'success','message' => 'Categories deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'Categories deleted successfully!');
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
        $categories = BlogCategorie::orderBy('created_at', 'desc')->paginate(10);
        $totalCategorie = BlogCategorie::count();
        return view('livewire.admin.blogs.blogs-categories',[
            'categories' => $categories,
            'totalCategorie' => $totalCategorie,
        ]);
    }
}
