<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\BlogTitle;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class BlogTitles extends Component
{
    use WithPagination, LivewireAlert;

    public $title;
    public $long_description;
    public $blogTitleId;
    public $isOpen = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'long_description' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.admin.blogs.blog-titles', [
            'blogTitles' => BlogTitle::paginate(10),
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
        $this->blogTitleId = null;
    }

    public function store()
    {
        $this->validate();

        BlogTitle::updateOrCreate(['id' => $this->blogTitleId], [
            'title' => $this->title,
            'long_description' => $this->long_description,
        ]);

        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Blogs added successfully!']);
        // $this->alertMessage('success', 'Operation success','Blogs added successfully!');
        $this->alertMessage('success', 'Blog Title Updated Successfully.' );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $blogTitle = BlogTitle::findOrFail($id);
        $this->blogTitleId = $id;
        $this->title = $blogTitle->title;
        $this->long_description = $blogTitle->long_description;

        $this->openModal();
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
    public function delete($id)
    {
        BlogTitle::find($id)->delete();
        session()->flash('message', 'Blog Title Deleted Successfully.');
    }
}
