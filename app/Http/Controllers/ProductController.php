<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\ProductTitle;

use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');

        $products = Product::with('categorie')
            ->where('name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->paginate(10);        $totalProducts = Product::count();
        $productTitles = ProductTitle::all();

        return view('front.products.index', compact('products', 'totalProducts', 'productTitles', 'search'),[
            'page_title' => 'Products'

        ]);
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('front.products.create', compact('categories'),[
            'page_title' => 'Create Products'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('ProductsImages', 'public') : null;

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'image' => $imagePath,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categorie::all();

        return view('front.products.edit', compact('product', 'categories'),[
            'page_title' => 'Edit Products'
        ]);
    }

    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'short_description' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
        'categorie_id' => 'required|exists:categories,id',
    ]);

    $data = $request->only(['name', 'description', 'short_description', 'categorie_id']);

    if ($request->hasFile('image')) {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $data['image'] = $request->file('image')->store('ProductsImages', 'public');
    }

    $product->update($data);

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

     // Product Title Methods

     public function createTitle()
     {
         return view('front.products.create-title',[
             'page_title' => 'Create Product Title'
         ]);
     }

     public function storeTitle(Request $request)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'long_description' => 'required|string',
         ]);

         ProductTitle::create($request->all());

         return redirect()->route('products.index')->with('success', 'Product Title created successfully!');
     }

     public function editTitle($id)
     {
         $productTitle = ProductTitle::findOrFail($id);

         return view('front.products.edit-title', compact('productTitle'),[
             'page_title' => 'Edit Product Title'
         ]);
     }

     public function updateTitle(Request $request, $id)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'long_description' => 'required|string',
         ]);

         $productTitle = ProductTitle::findOrFail($id);
         $productTitle->update($request->all());

         return redirect()->route('products.index')->with('success', 'Product Title updated successfully!');
     }

     public function destroyTitle($id)
     {
         $productTitle = ProductTitle::findOrFail($id);
         $productTitle->delete();

         return redirect()->route('products.index')->with('success', 'Product Title deleted successfully!');
     }
}