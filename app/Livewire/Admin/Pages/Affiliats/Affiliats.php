<?php

namespace App\Livewire\Admin\Pages\Affiliats;

use App\Models\Affiliate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Affiliats extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $affiliats;
    public $affiliatId;
    public $subtitle;
    public $title;
    public $description;
    public $button;

    public function mount()
    {
        $this->affiliats = Affiliate::all();
    }
    protected $rules = [
        'subtitle' =>'required',
        'title' =>'required',
        'description' =>'required',
        'button' =>'required',
    ];

    public function create()
    {
        $this->validate();

        $affiliate = Affiliate::create([
         'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'button' => $this->button,
        ]);
        $this->affiliats = Affiliate::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Affiliate added successfully!']);
        $this->alertMessage();
    }
    public function edit($affiliatId)
    {
        $this->affiliatId = $affiliatId;
        $affiliate = Affiliate::find($affiliatId);
        $this->subtitle = $affiliate->subtitle;
        $this->title = $affiliate->title;
        $this->description = $affiliate->description;
        $this->button = $affiliate->button;
    }
    public function update()
    {
        $this->validate(); 
        $affiliate = Affiliate::find($this->affiliatId);
        $affiliate->update([
            'title' => $this->title,
          'subtitle' => $this->subtitle,
           'description' => $this->description,
           'button' => $this->button,
        ]);
        $this->affiliats = Affiliate::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info','message' => 'Affiliate updated successfully!']);
        $this->alertMessage();
    }

    public function delete($id)
    {
        $affiliate = Affiliate::find($id);
        $affiliate->delete();
        $this->affiliats = Affiliate::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger','message' => 'Affiliate deleted successfully!']);
        $this->alertMessage();
    }

    public function resetFields()
    {
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->button = '';
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
        return view('livewire.admin.pages.affiliats.affiliats');
    }
}
