<?php

namespace App\Livewire\Admin\Products;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Products extends Component
{
    use WithPagination, WithFileUploads, LivewireAlert;

    public $products;
    public $categories;
    public $productId;
    public $name;
    public $description;
    public $short_description;
    public $image;
    public $categorie_id;
    public $isOpen = false;
    public $selectedCategories = [];
    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string|max:255',
        'categorie_id' => 'required|exists:categories,id', // Add validation rule for category_id
    ];


    public function mount()
    {
        $this->categories = Categorie::all();
        // $this->products = Product::all();
        $this->products = Product::with('categorie')->get();

        // dd($this->categories);
    }
    
    public function resetFields()
    {
        $this->name = '';
        $this->description = '';
        $this->short_description = '';
        $this->image = null;
        $this->categorie_id = null;
        $this->productId = null;
    }

    public function create()
    {
        $this->validate();

        if ($this->image instanceof UploadedFile) {
            $this->image = $this->image->store('ProductsImages', 'public');
        }

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'image' => $this->image,
            'categorie_id' => $this->categorie_id,
        ]);
        // $this->products = Product::all();
        $this->products = Product::with('categorie')->get();

        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Product added successfully!');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $this->productId = $id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->short_description = $product->short_description;
        $this->image = $product->image;
        $this->categorie_id = $product->categorie_id;
    }
    public function update()
    {
        $product = Product::find($this->productId);
         if (!$product) {
        // Handle the case where the product is not found
        $this->dispatch('showAlert', ['type' => 'error', 'message' => 'Product not found!']);
        return;
    }

        $this->deleteImage($product->image, $this->image);

        if ($this->image instanceof UploadedFile) {
            $this->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072']);
            $this->image = $this->image->store('ProductsImages', 'public');
            $product->image = $this->image;
            $product->save();
        }
        // $product->update([
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'short_description' => $this->short_description,
        //     'categorie_id' => $this->categorie_id,
        // ]);
        $product->name = $this->name;
        $product->description = $this->description;
        $product->short_description = $this->short_description;
        $product->categorie_id = $this->categorie_id;
        $product->save();

        $this->products = Product::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'Product updated successfully!');
    }
    public function delete($id){
        $product = Product::find($id);
        $this->deleteImage($product->image, $this->image);
        $product->delete();
        $this->products = Product::all();
        $this->dispatch('showAlert', ['type' =>'success','message' => 'About Deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'About Deleted successfully!');
    }
    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
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
        $this->dispatch('hide-modal'); 
    }
    public function editRedirect($id)
    {
        return redirect()->route('admin.products.update', ['id' => $id]);
    }
    public function render()
    {
        // $this->products = Product::with('categorie')->get();
        return view('livewire.admin.products.products', [
            'products' => $this->products,
        ]);
    }
    
}
