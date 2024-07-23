<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogCategorie;
use App\Models\BlogTitle;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('user', 'category')->paginate(10);
        $categories = BlogCategorie::all();
        $blogTitles = BlogTitle::all();
        $totalBlogs = Blog::count(); // Get the total count of blogs

        return view('front.blogs.index', compact('blogs', 'categories', 'blogTitles', 'totalBlogs'), [
            'page_title' => 'Blogs'
        ]);
    }
    public function create()
    {
        $categories = BlogCategorie::all();
        return view('front.blogs.create', compact('categories'), [
            'page_title' => 'Create Blog'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:3024',
            'button' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'category_id' => 'required|exists:blog_categories,id',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('BlogsImages', 'public') : null;

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'button' => $request->button,
            'link' => $request->link,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategorie::all();

        return view('front.blogs.edit', compact('blog', 'categories'), [
            'page_title' => 'Update Blog'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:3024',
            'button' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
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
            'link' => $request->link,
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

    // CRUD operations for BlogTitle

    public function createTitle()
    {
        return view('front.blogs.create-title', [
            'page_title' => 'Create Blog Title'
        ]);
    }

    public function storeTitle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        BlogTitle::create([
            'title' => $request->title,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog Title created successfully!');
    }

    public function editTitle($id)
    {
        $blogTitle = BlogTitle::findOrFail($id);

        return view('front.blogs.edit-title', compact('blogTitle'), [
            'page_title' => 'Update Blog Title'
        ]);
    }

    public function updateTitle(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'long_description' => 'required|string',
        ]);

        $blogTitle = BlogTitle::findOrFail($id);
        $blogTitle->update([
            'title' => $request->title,
            'long_description' => $request->long_description,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog Title updated successfully!');
    }

    public function destroyTitle($id)
    {
        $blogTitle = BlogTitle::findOrFail($id);
        $blogTitle->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog Title deleted successfully!');
    }
}
