<?php

namespace App\Livewire\Admin\Home\Testimonials;

use App\Models\Testimonial;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Testimonials extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $testimonials;
    public $subtitle, $title, $description,
    $slider_image_1, $client_name_1, $slider_description_1,
    $slider_image_2, $client_name_2, $slider_description_2,
    $slider_image_3, $client_name_3, $slider_description_3, 
    $rating, $rating_1, $rating_2;
    public $selectedTtestimonial, $testimonialId;

    public function mount()
    {
        $this->testimonials = Testimonial::all();
    }
    protected $rules = [
    'subtitle' => 'required|string|max:255',
    'title' => 'required|string|max:255',
    'description' => 'required|string',
    'slider_image_1' => 'required|image|max:2048',
    'client_name_1' =>'required|string|max:255',
    'slider_description_1' =>'required|string',
    'rating_1' =>'required|integer|min:1|max:5',
    'slider_image_2' => 'required|image|max:2048',
    'client_name_2' =>'required|string|max:255',
    'slider_description_2' =>'required|string',
    'rating_2' =>'required|integer|min:1|max:5',
    'slider_image_3' => 'required|image|max:2048',
    'client_name_3' =>'required|string|max:255',
    'slider_description_3' =>'required|string',
    'rating' =>'required|integer|min:1|max:5',
    ];


 public function create(){
        $this->validate();
    
        if ($this->slider_image_1 instanceof UploadedFile) {
            $this->slider_image_1 = $this->slider_image_1->store('testimonials', 'public');
        }
        if ($this->slider_image_2 instanceof UploadedFile) {
            $this->slider_image_2 = $this->slider_image_2->store('testimonials', 'public');
        }
        if ($this->slider_image_3 instanceof UploadedFile) {
            $this->slider_image_3 = $this->slider_image_3->store('testimonials', 'public');
        }
        Testimonial::create([
          'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            
        'slider_image_1' => $this->slider_image_1,
        'client_name_1' => $this->client_name_1,
        'slider_description_1' => $this->slider_description_1,
        'rating_1' => $this->rating_1,
        'slider_image_2' => $this->slider_image_2,
        'client_name_2' => $this->client_name_2,
        'slider_description_2' => $this->slider_description_2,
        'rating_2' => $this->rating_2,
        'slider_image_3' => $this->slider_image_3,
        'client_name_3' => $this->client_name_3,
        'slider_description_3' => $this->slider_description_3,
        'rating' => $this->rating,
        ]);
        $this->testimonials = Testimonial::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Testimonial added successfully!']);
        $this->alertMessage();
    }


     public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->slider_image_1 = '';
        $this->client_name_1 = '';
        $this->slider_description_1 = '';
        $this->rating_1 = '';
        $this->slider_image_2 = '';
        $this->client_name_2 = '';
        $this->slider_description_2 = '';
        $this->rating_2 = '';
        $this->slider_image_3 = '';
        $this->client_name_3 = '';
        $this->slider_description_3 = '';
        $this->rating = '';
    }
    public function edit($testimonialId)
    {
        $this->selectedTtestimonial = Testimonial::find($testimonialId);
        $this->testimonialId = $testimonialId;
        $this->subtitle = $this->selectedTtestimonial->subtitle;
        $this->title = $this->selectedTtestimonial->title;
        $this->description = $this->selectedTtestimonial->description;
        $this->slider_image_1 = $this->selectedTtestimonial->slider_image_1;
        $this->client_name_1 = $this->selectedTtestimonial->client_name_1;
        $this->slider_description_1 = $this->selectedTtestimonial->slider_description_1;
        $this->rating_1 = $this->selectedTtestimonial->rating_1;
        $this->slider_image_2 = $this->selectedTtestimonial->slider_image_2;
        $this->client_name_2 = $this->selectedTtestimonial->client_name_2;
        $this->slider_description_2 = $this->selectedTtestimonial->slider_description_2;
        $this->rating_2 = $this->selectedTtestimonial->rating_2;
        $this->slider_image_3 = $this->selectedTtestimonial->slider_image_3;
        $this->client_name_3 = $this->selectedTtestimonial->client_name_3;
        $this->slider_description_3 = $this->selectedTtestimonial->slider_description_3;
        $this->rating = $this->selectedTtestimonial->rating;
    }
    public function update()
    {
        $testimonial =  Testimonial::find($this->testimonialId);
        if ($this->slider_image_1 instanceof UploadedFile) {
            $this->validate([
                'slider_image_1' => 'required|image|max:3048',
            ]);
            $this->slider_image_1 = $this->slider_image_1->store('testimonials', 'public');
            $testimonial->slider_image_1 = $this->slider_image_1;
        }
        if ($this->slider_image_2 instanceof UploadedFile) {
            $this->validate([
                'slider_image_2' => 'required|image|max:3048',
            ]);
            $this->slider_image_2 = $this->slider_image_2->store('testimonials', 'public');
            $testimonial->slider_image_2 = $this->slider_image_2;
        }
        if ($this->slider_image_3 instanceof UploadedFile) {
            $this->slider_image_3 = $this->slider_image_3->store('testimonials', 'public');
            $testimonial->slider_image_3 = $this->slider_image_3;
        }
        $testimonial->subtitle = $this->subtitle;
        $testimonial->title = $this->title;
        $testimonial->description = $this->description;
        $testimonial->client_name_1 = $this->client_name_1;
        $testimonial->slider_description_1 = $this->slider_description_1;
        $testimonial->rating_1 = $this->rating_1;
        $testimonial->client_name_2 = $this->client_name_2;
        $testimonial->slider_description_2 = $this->slider_description_2;
        $testimonial->rating_2 = $this->rating_2;
        $testimonial->client_name_3 = $this->client_name_3;
        $testimonial->slider_description_3 = $this->slider_description_3;
        $testimonial->rating = $this->rating;
        $testimonial->save();
        $this->testimonials = Testimonial::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Testimonial updated successfully!']);
        $this->alertMessage();

    }

    public function delete($id)
        {
            Testimonial::find($id)->delete();
            $this->testimonials = Testimonial::all();
            $this->dispatch('showAlert', ['type' => 'danger','message' => 'Testimonial deleted successfully!']);
            $this->alertMessage();
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
    

    public function render()
    {
        return view('livewire.admin.home.testimonials.testimonials');
    }
}
