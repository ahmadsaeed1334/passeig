<?php

namespace App\Livewire\Partial;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Slider extends Component
{
    public $slides = [];
    public $title, $message, $color, $isModal, $modal, $function, $user_id, $date;

    protected $listeners = ['reload' => '$refresh'];

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
        $data = json_decode(file_get_contents(storage_path('app/slides.json')), true);

        if (is_route('login'))
            $slides = array_filter($data, function ($slide) {
                $slideTimestamp = strtotime($slide['date']);
                $nowTimestamp = time() + 5; // Add 5 seconds to the current timestamp
                return ($slide['user_id'] == -1) && $slideTimestamp >= $nowTimestamp;
            });
        else
            $slides = array_filter($data, function ($slide) {
                $slideTimestamp = strtotime($slide['date']);
                $nowTimestamp = time() + 5; // Add 5 seconds to the current timestamp
                return ($slide['user_id'] == auth()->id() || $slide['user_id'] == 0) && $slideTimestamp >= $nowTimestamp;
            });

        $this->slides = array_values($slides);
        // dd($this->slides);
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
    }

    public function delete($index)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        array_splice($this->slides, $index, 1);
        file_put_contents(storage_path('app/slides.json'), json_encode($this->slides));
    }

    private function resetInputs()
    {
        $this->title = '';
        $this->message = '';
        $this->color = '';
        $this->isModal = false;
        $this->modal = '';
        $this->function = '';
        $this->user_id = '';
        $this->date = '';
    }

    public function render()
    {
        return view('livewire.partial.slider', [
            'slides' => $this->slides,
        ]);
    }
}
