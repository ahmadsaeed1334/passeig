<?php

namespace App\Livewire\Admin\Home;

use App\Models\HeroBanner as ModalHeroBanner;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class HeroBanner extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    public $heroBanners;
    public $currentHeroBannerId;
    public $title, $subtitle, $fileUrl, $description, $buttonText, $buttonLink, $file;
    public $selectedHeroBanner, $heroBannerId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
        'buttonText' => 'required|string|max:255',
        'buttonLink' => 'required|url|max:255',
        'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];
    public function mount()
    {
        $this->heroBanners = ModalHeroBanner::all();
    }
    // public function create()
    // {
    //     $this->validate();
    //     ModalHeroBanner::create([
    //         'title' => $this->title,
    //         'subtitle' => $this->subtitle,
    //         'description' => $this->description,
    //         'button_test' => $this->buttonTest,
    //         'button_link' => $this->buttonLink,
    //         'file' => $this->file,
    //     ]);
    //     $this->resetFields();
    //     $this->heroBanners = ModalHeroBanner::all();
    // 
    public function editHeroBanner($heroBannerId)
{
    $heroBanner = ModalHeroBanner::find($heroBannerId);
    if ($heroBanner) {
        $this->heroBannerId = $heroBannerId;
        $this->title = $heroBanner->title;
        $this->subtitle = $heroBanner->subtitle;
        $this->description = $heroBanner->description;
        $this->buttonText = $heroBanner->button_text_1;
        $this->buttonLink = $heroBanner->button_link_1;
        $this->file = $heroBanner->file;
        $this->fileUrl = Storage::url($heroBanner->file);
        $this->selectedHeroBanner = $heroBanner;
    }
}

    public function update()
    {
        // if ($this->file instanceof UploadedFile) {
        //     $fileModel = $this->handleFileUpload($this->file);
        //     $updateData['file'] = $fileModel->path;
        // }
        $heroBanner = ModalHeroBanner::find($this->heroBannerId);
        if ($this->file instanceof UploadedFile) {
            $this->validate([
                'file' => 'required|image|max:3072',
            ]);
            $this->file = $this->file->store('heroBanners', 'public');
            $heroBanner->file = $this->file;
        }
        $heroBanner->title = $this->title;
        $heroBanner->subtitle = $this->subtitle;
        $heroBanner->description = $this->description;
        $heroBanner->button_text_1 = $this->buttonText;
        $heroBanner->button_link_1 = $this->buttonLink;
        $heroBanner->save();
        
        $this->heroBanners = ModalHeroBanner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Hero Banner updated successfully!']);
        $this->alertMessage();
    }
    private function handleFileUpload($file)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = uniqid() . '.' . $extension;
        $path = $file->storeAs('heroBanners', $filename, 'public');
        return (object) ['path' => $path, 'extension' => $extension];
    }

    private function resetFields()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->description = '';
        $this->buttonText = '';
        $this->buttonLink = '';
        $this->file = '';
    }
    public function render()
    {
        
        return view('livewire.admin.home.hero-banner');
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
        $this->dispatch('hide-modal'); // You may need to handle modal hiding through JavaScript
    }
}
