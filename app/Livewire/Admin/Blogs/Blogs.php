<?php

namespace App\Livewire\Admin\Blogs;

use Livewire\Component;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Models\Blog;
use App\Models\BlogCategorie;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Blogs extends Component
{
    use LivewireAlert;
    use WithFileUploads;
   
    public $blogs;
    public $blogsId;
    public $title;
    public $description;
    public $image;
    public $button;
    public $category_id; 
    public $categories; 
    public $isOpen = false;
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:3024', 
        'button' => 'nullable|string|max:255',
        'category_id' => 'required|exists:blog_categories,id', 

    ];
    public function mount() {
        $this->blogs = Blog::latest()->with('user', 'category')->get();
        $this->categories = BlogCategorie::all();
    }
    public function create(){
        $this->validate();
    
        if ($this->image instanceof UploadedFile) {
            $this->image = $this->image->store('BlogsImages', 'public');
        }
        Blog::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'button' => $this->button,
            'user_id' => Auth::id(),
            'category_id' => $this->category_id, 

        ]);
        $this->blogs = Blog::latest()->with('user')->get();
        // $this->blogs = Blog::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Blogs added successfully!']);
        $this->alertMessage('success', 'Operation success','Blogs added successfully!');
    }
    public function edit($id) {
        $blog = Blog::find($id);
        if ($blog) {
            $this->blogsId = $blog->id;
            $this->title = $blog->title;
            $this->description = $blog->description;
            $this->image = $blog->image;
            $this->button = $blog->button;
            $this->category_id = $blog->category_id;
            $this->dispatch('show-modal');
        } else {
            $this->alertMessage('danger', 'Not Found', 'Blog not found!');
        }
    }
    public function update() {
        $blog = Blog::findOrFail($this->blogsId);

        $this->deleteImage($blog->image, $this->image);
        if ($this->image instanceof UploadedFile) {
            $this->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072']);
            $this->image = $this->image->store('BlogsImages', 'public');
            $blog->image = $this->image;
            $blog->save();
        }
        $blog->title = $this->title;
        $blog->description = $this->description;
        $blog->button = $this->button;
        $blog->category_id = $this->category_id; // Add this field
        $blog->user_id = Auth::id();
        $blog->save();
        $this->blogs = Blog::latest()->with('user', 'category')->get();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Blogs updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'Blogs updated successfully!');
    }
    public function delete(Blog $blog) {
        $blog->delete();
        $this->blogs = Blog::latest()->with('user', 'category')->get();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Blogs deleted successfully!']); 
        $this->alertMessage('success', 'Operation success', 'Blogs deleted successfully!');
    }
    public function resetFields(){
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->button = '';
        $this->category_id = ''; 

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
    public function render() {
        // dd($this->blogs);
        return view('livewire.admin.blogs.blogs', [
            'blogs' => $this->blogs,
            'categories' => $this->categories, 
        ]);
    }
}
