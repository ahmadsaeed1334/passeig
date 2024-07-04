<?php
namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ProductsForm extends Component
{
    use WithFileUploads, LivewireAlert;

    public $name;
    public $description;
    public $short_description;
    public $image;
    public $categorie_id;
    public $categories;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        'categorie_id' => 'required|exists:categories,id',
    ];

    public function mount()
    {
        $this->categories = Categorie::all();
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

        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Product added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Product added successfully!');
        return redirect()->back();
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
    }
    public function resetFields()
    {
        $this->name = '';
        $this->description = '';
        $this->short_description = '';
        $this->image = null;
        $this->categorie_id = null;
    }

    public function render()
    {
        return view('livewire.admin.products.products-form');
    }
}

