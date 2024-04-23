<?php

namespace App\Livewire\Admin\Giveaway\GiveawaySpecifications;

use App\Models\GiveawaySpecification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Giveaway;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class GiveawaySpecifications extends Component
{

    
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $selectedGiveawayId;
    public $giveawayId;
    public $title;
    public $value;
    public $card_icon;
    public $giveaways;
    public $giveawaySpecifications;
    public $giveawaySpecificationsId;
    protected $rules = [
        'title' =>'required',
        'value' =>'required',
        'card_icon' =>'required',
        'selectedGiveawayId' => 'required|exists:giveaways,id',
    ];

    public function mount(){
        $this->giveaways = Giveaway::all(); 
        $this->giveawaySpecifications = GiveawaySpecification::all(); 
    }
 
    public function create(){
    $this->validate();
        if ($this->card_icon instanceof UploadedFile) {
            $this->card_icon = $this->card_icon->store('GiveawaySpecification', 'public');
        }
        GiveawaySpecification::create([
            'giveaway_id' => $this->selectedGiveawayId,
            'title' => $this->title,
            'value' => $this->value,
            'card_icon' => $this->card_icon,
            'is_active' => 1,
        ]);
        $this->giveawaySpecifications = GiveawaySpecification::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Giveaway Specification added successfully!']);
        $this->alertMessage();
 }

 public function edit($id){
    $giveawaySpecification = GiveawaySpecification::findOrFail($id);
    $this->giveawaySpecificationsId = $giveawaySpecification->id;
    $this->selectedGiveawayId = $giveawaySpecification->giveaway_id;
    $this->title = $giveawaySpecification->title;
    $this->value = $giveawaySpecification->value;
    $this->card_icon = $giveawaySpecification->card_icon;
 }
 public function update(){
    $giveawaySpecifications =GiveawaySpecification::findOrFail($this->giveawaySpecificationsId);
    if ($this->card_icon instanceof UploadedFile) {
        $this->validate([
            'card_icon' =>'required|image|max:3072',
        ]);
        $this->card_icon = $this->card_icon->store('GiveawaySpecification', 'public');
        $giveawaySpecifications->card_icon =  $this->card_icon;
    }
    $giveawaySpecifications->giveaway_id = $this->selectedGiveawayId;
    $giveawaySpecifications->title = $this->title;
    $giveawaySpecifications->value = $this->value;
    $giveawaySpecifications->save();
    $this->resetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Giveaway Specification updated successfully!']);
    $this->alertMessage();
    $this->giveawaySpecifications = GiveawaySpecification::all();
    // $giveawaySpecifications = GiveawaySpecification::findOrFail($this->giveawaySpecificationsId);

}

 public function delete($id){
    $giveawaySpecification = GiveawaySpecification::findOrFail($id);
    $giveawaySpecification->delete();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Giveaway Specification deleted successfully!']);
    $this->alertMessage();
    $this->giveawaySpecifications = GiveawaySpecification::all();
 }
 public function resetFields(){
    $this->title = "";
    $this->value = "";
    $this->card_icon = "";
    $this->giveawaySpecificationsId = "";
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
        $giveawaySpecifications = collect();
        if ($this->selectedGiveawayId) {
            $giveawaySpecifications = GiveawaySpecification::where('giveaway_id', $this->selectedGiveawayId)->get();
        }
        $giveaways = $this->giveaways ?? Giveaway::all(); // Fallback to retrieving in render if not set in mount
        return view('livewire.admin.giveaway.giveaway-specifications.giveaway-specifications', compact('giveawaySpecifications', 'giveaways'));
    }
}
