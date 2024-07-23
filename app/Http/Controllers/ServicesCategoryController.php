<?php

namespace App\Http\Controllers;
use App\Models\ServicesCategory;

use Illuminate\Http\Request;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $categories = ServicesCategory::with('subcategories')->whereNull('parent_id')->paginate(10);
        $totalCategories = ServicesCategory::count(); // Get the total count of blogs

        return view('front.services-appoinment.services_categories.index', compact('categories','totalCategories'),[
          'page_title' => 'Services Category'

        ]);
    }

    public function create()
    {
        $categories = ServicesCategory::whereNull('parent_id')->get();

        return view('front.services-appoinment.services_categories.create',[
            'page_title' => 'Create Services Category'

        ],compact('categories'));


    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon_image' => 'required|image|max:2048',
            'parent_id' => 'nullable|exists:services_categories,id',

        ]);

        $iconImagePath = $request->file('icon_image')->store('icons', 'public');

        ServicesCategory::create([
            'name' => $request->name,
            'icon_image' => $iconImagePath,
            'parent_id' => $request->parent_id,

        ]);

        return redirect()->route('services-category.index')->with('success', 'Category created successfully.');
    }

    public function edit(ServicesCategory $category)
    {
        $categories = ServicesCategory::whereNull('parent_id')->get();

        return view('front.services-appoinment.services_categories.edit', compact('category', 'categories'),[
            'page_title' => 'Edit Services Category'
        ]);
    }

    public function update(Request $request, ServicesCategory $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon_image' => 'nullable|image|max:2048',
            'parent_id' => 'nullable|exists:services_categories,id',
        ]);

        if ($request->hasFile('icon_image')) {
            $iconImagePath = $request->file('icon_image')->store('icons', 'public');
            $category->update([
                'icon_image' => $iconImagePath,
            ]);
        }

        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('services-category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(ServicesCategory $category)
    {
        $category->delete();
        return redirect()->route('services-category.index')->with('success', 'Category deleted successfully.');
    }
}
