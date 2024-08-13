<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('front.gallery.index', compact('categories'), [
            'page_title' => 'Gallery Management'
        ]);
    }

    public function storeCategory(Request $request)
    {
        $category = Category::create(['name' => $request->name]);
        return response()->json(['success' => 'Category added successfully', 'category' => $category]);
    }


    public function editCategory($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return response()->json(['success' => 'Category updated successfully', 'category' => $category]);
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id);
        $category->images()->delete(); // Delete all related images
        $category->delete();

        return response()->json(['success' => 'Category deleted successfully']);
    }

    public function store(Request $request)
    {
        $image = new Image();
        $image->category_id = $request->category_id;
        $image->title = $request->title;
        $image->addMedia($request->file('image'))->toMediaCollection('gallery');
        $image->save();

        return response()->json(['success' => 'Image added successfully']);
    }

    public function edit($id)
    {
        $image = Image::find($id);
        return response()->json($image);
    }

    public function update(Request $request, $id)
    {
        $image = Image::find($id);
        $image->category_id = $request->category_id;
        $image->title = $request->title;

        if ($request->hasFile('image')) {
            $image->clearMediaCollection('gallery');
            $image->addMedia($request->file('image'))->toMediaCollection('gallery');
        }

        $image->save();

        return response()->json(['success' => 'Image updated successfully']);
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return response()->json(['success' => 'Image deleted successfully']);
    }
}
