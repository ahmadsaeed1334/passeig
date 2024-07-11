<?php
namespace App\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\ProductTitle;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ProductTitles extends Component
{
    use WithPagination, LivewireAlert;

    public $title;
    public $long_description;
    public $productTitleId;
    public $isOpen = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'long_description' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.admin.products.product-titles', [
            'productTitles' => ProductTitle::paginate(10),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->long_description = '';
        $this->productTitleId = null;
    }

    public function store()
    {
        $this->validate();

        ProductTitle::updateOrCreate(['id' => $this->productTitleId], [
            'title' => $this->title,
            'long_description' => $this->long_description,
        ]);

        session()->flash('message', $this->productTitleId ? 'Product Title Updated Successfully.' : 'Product Title Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $productTitle = ProductTitle::findOrFail($id);
        $this->productTitleId = $id;
        $this->title = $productTitle->title;
        $this->long_description = $productTitle->long_description;

        $this->openModal();
    }

    public function delete($id)
    {
        ProductTitle::find($id)->delete();
        session()->flash('message', 'Product Title Deleted Successfully.');
    }
}
