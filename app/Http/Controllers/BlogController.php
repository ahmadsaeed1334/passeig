<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogCategorie;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('user', 'category')->paginate(10);
        $categories = BlogCategorie::all();

        return view('blogs.index', compact('blogs', 'categories'), [
            'page_title'=>'Blogs'
        ]);
    }
    public function create()
    {
        $categories = BlogCategorie::all();
        return view('blogs.create', compact('categories'), [
            'page_title'=>'Create Blogs'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:3024',
            'button' => 'nullable|string|max:255',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('BlogsImages', 'public') : null;

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'button' => $request->button,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategorie::all();

        return view('blogs.edit', compact('blog', 'categories'), [
            'page_title'=>'Update Blogs'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:3024',
            'button' => 'nullable|string|max:255',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->file('image')) {
            $this->deleteImage($blog->image);
            $blog->image = $request->file('image')->store('BlogsImages', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
            'button' => $request->button,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $this->deleteImage($blog->image);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }

    private function deleteImage($path)
    {
        if ($path) {
            Storage::disk('public')->delete($path);
        }
    }
}
