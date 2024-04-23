<?php

namespace App\Livewire\Admin\ContestCards;

use App\Models\ContestCard;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class ContestCards extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;

    public $contestCards;
    public $card_icon, $card_title, $card_description;
    public $selectedContests, $contestId;
    protected $rules = [
        'card_icon' =>'required|nullable||image|max:3072',
        'card_title' =>'required',
        'card_description' =>'required',
    ];
    public function mount(){
        $this->contestCards = ContestCard::all();
    }
    public function create(){
        $this->validate();
    
        if ($this->card_icon instanceof UploadedFile) {
            $this->card_icon = $this->card_icon->store('ContestCardIcons', 'public');
        }
        ContestCard::create([
            'card_icon' => $this->card_icon,
            'card_title' => $this->card_title,
            'card_description' => $this->card_description,
        ]);
        $this->contestCards = ContestCard::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Contest Card added successfully!']);
        $this->alertMessage();
    }

    public function edit($id){
        $this->selectedContests = ContestCard::find($id);
        $this->contestId = $id;
        $this->card_icon = $this->selectedContests->card_icon;
        $this->card_title = $this->selectedContests->card_title;
        $this->card_description = $this->selectedContests->card_description;
        $this->dispatch('show-modal');
    }
    public function update(){
      $contestCards =  ContestCard::find($this->contestId);
      
        if ($this->card_icon instanceof UploadedFile) {
            $this->validate([
                'card_icon' =>'required|image|max:3072',
            ]);
            $this->card_icon = $this->card_icon->store('ContestCardIcons', 'public');
            $contestCards->card_icon =  $this->card_icon;
        }
        $contestCards->card_title = $this->card_title;
        $contestCards->card_description = $this->card_description;
        $contestCards->save();
        $this->contestCards = ContestCard::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Contest Card updated successfully!']);
        $this->alertMessage();
    }
    public function delete($id){
        $contestCards = ContestCard::find($id);
        $contestCards->delete();
        $this->contestCards = ContestCard::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Contest Card deleted successfully!']);
        $this->alertMessage();
    }

    public function resetFields(){
        $this->card_icon = '';
        $this->card_title = '';
        $this->card_description = '';
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
        return view('livewire.admin.contest-cards.contest-cards');
    }
}
