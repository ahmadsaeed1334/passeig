<?php
// In App\Http\Livewire\Admin\Products\ProductUpdate.php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ProductUpdate extends Component
{
    use WithFileUploads, LivewireAlert;

    public $products;
    public $name;
    public $description;
    public $short_description;
    public $image;
    public $categorie_id;
    public $categories;
    public $productId;

    public function mount($id)
    {
        $this->categories = Categorie::all();
        $this->productId = $id;
        $this->loadProductData();
    }

    public function loadProductData()
    {
        $product = Product::find($this->productId);
        if ($product) {
            $this->name = $product->name;
            $this->description = $product->description;
            $this->short_description = $product->short_description;
            $this->image = $product->image;
            $this->categorie_id = $product->categorie_id;
        }
    }

    // public function editRedirect($id)
    // {
    //     return redirect()->route('admin.products.update', ['id' => $id]);
    // }

    public function update()
    {
        $product = Product::find($this->productId);
        if (!$product) {
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

        $product->name = $this->name;
        $product->description = $this->description;
        $product->short_description = $this->short_description;
        $product->categorie_id = $this->categorie_id;
        $product->save();

        $this->products = Product::all();
        return redirect()->route('admin/products');
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'Product updated successfully!');
    }

    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
    }

    public function resetFields()
    {
        $this->name = '';
        $this->description = '';
        $this->short_description = '';
        $this->image = null;
        $this->categorie_id = null;
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
        return view('livewire.admin.products.product-update');
    }
}
