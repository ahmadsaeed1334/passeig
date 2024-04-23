<?php

namespace App\Livewire\Admin\News;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class News extends Component
{
    use LivewireAlert;

    public $slides = [];
    public $search = null, $results;
    public $slideId, $title, $message, $color, $isModal, $modal, $function, $user_id = 0, $date;

    protected $listeners = ['refreshPhoto' => 'mount', 'reload' => '$refresh'];

    public function updatedSearch()
    {
        $this->results = User::search($this->search)->get();
    }

    public function userProfile($id)
    {
        $this->dispatch('userProfile', $id);
    }

    public function userAccount($id)
    {
        $this->dispatch('userAccount', $id);
    }

    public function userPassword($id)
    {
        $this->dispatch('userPassword', $id);
    }

    public function mount()
    {
        // $this->slides = json_decode(file_get_contents(storage_path('app/slides.json')), true);
        // $data = json_decode(file_get_contents(storage_path('app/slides.json')), true);

        // $this->slides = array_filter($data, function ($slide) {
        //     $slideTimestamp = strtotime($slide['date']);
        //     $nowTimestamp = time() + 5; // Add 5 seconds to the current timestamp
        //     return $slideTimestamp >= $nowTimestamp;
        // });

        // $this->slides = array_values($this->slides);
        if (auth()->user()->user_type == -1)
            $this->slides = json_decode(file_get_contents(storage_path('app/slides.json')), true);
        else {
            $data = json_decode(file_get_contents(storage_path('app/slides.json')), true);

            $slides = array_filter($data, function ($slide) {
                $slideTimestamp = strtotime($slide['date']);
                $nowTimestamp = time() + 5; // Add 5 seconds to the current timestamp
                return ($slide['user_id'] == auth()->id() || $slide['user_id'] == 0) && $slideTimestamp >= $nowTimestamp;
            });

            $this->slides = array_values($slides);
        }
        // dd($this->slides);
        $this->date = today();
    }

    public function store()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $slide = [
            'title' => $this->title,
            'message' => $this->message,
            'color' => $this->color,
            'isModal' => $this->isModal,
            'modal' => $this->modal,
            'function' => $this->function,
            'user_id' => $this->user_id,
            'date' => $this->date,
        ];

        $this->slides[] = $slide;
        file_put_contents(storage_path('app/slides.json'), json_encode($this->slides));

        $this->resetInputs();
        $this->dispatch('closeModal', ['modalId' => "addSlidesModel"]);
    }

    public function edit($index)
    {
        $slide = $this->slides[$index];
        $this->slideId = $index;
        $this->title = $slide['title'];
        $this->message =  $slide['message'];
        $this->color =    $slide['color'];
        $this->isModal = $slide['isModal'];
        $this->modal = $slide['modal'];
        $this->function =  $slide['function'];
        $this->user_id = $slide['user_id'];
        $this->date =   $slide['date'];
    }

    public function update($index)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $slide = $this->slides[$index];

        $slide['title'] = $this->title;
        $slide['message'] = $this->message;
        $slide['color'] = $this->color;
        $slide['isModal'] = $this->isModal;
        $slide['modal'] = $this->modal;
        $slide['function'] = $this->function;
        $slide['user_id'] = $this->user_id;
        $slide['date'] = $this->date;

        $this->slides[$index] = $slide;
        file_put_contents(storage_path('app/slides.json'), json_encode($this->slides));

        $this->resetInputs();
        $this->dispatch('closeModal', ['modalId' => "addSlidesModel"]);
    }

    public function delete($index)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        array_splice($this->slides, $index, 1);
        file_put_contents(storage_path('app/slides.json'), json_encode($this->slides));
    }

    public function resetInputs()
    {
        $this->slideId = null;
        $this->title = '';
        $this->message = '';
        $this->color = '';
        $this->isModal = false;
        $this->modal = '';
        $this->function = '';
        $this->user_id = 0;
        $this->date = today();
        $this->search = null;
        $this->results = null;
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

    public function render()
    {
        return view('livewire.admin.news.news', [
            'slides' => $this->slides,
            'total_slides' => count($this->slides),
        ]);
    }
}
