<?php

namespace App\Livewire\Admin\Pages\TopAffiliates;

use App\Models\TopAffiliate;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class TopAffiliates extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $topAffiliates;
    public $subtitle, $title, $description;
    public $card_image_1, $card_name_1, $card_amount_1;
    public $card_image_2, $card_name_2, $card_amount_2;
    public $card_image_3, $card_name_3, $card_amount_3;
    public $selectedTopAffiliates, $topAffiliateId;
    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'card_image_1' => 'nullable|image|max:2048',
        'card_name_1' => 'nullable|string|max:255',
        'card_amount_1' => 'nullable|numeric',
        'card_image_2' => 'nullable|image|max:2048',
        'card_name_2' => 'nullable|string|max:255',
        'card_amount_2' => 'nullable|numeric',
        'card_image_3' => 'nullable|image|max:2048',
        'card_name_3' => 'nullable|string|max:255',
        'card_amount_3' => 'nullable|numeric',
    ];
 public function mount()
    {
        $this->topAffiliates = TopAffiliate::all();
    }

    public function create(){
        $this->validate();
    
        if ($this->card_image_1 instanceof UploadedFile) {
            $this->card_image_1 = $this->card_image_1->store('TopAffiliateIcons', 'public');
        }
        if ($this->card_image_2 instanceof UploadedFile) {
            $this->card_image_2 = $this->card_image_2->store('TopAffiliateIcons', 'public');
        }
        if ($this->card_image_3 instanceof UploadedFile) {
            $this->card_image_3 = $this->card_image_3->store('TopAffiliateIcons', 'public');
        }
        TopAffiliate::create([
           'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'card_image_1' => $this->card_image_1,
            'card_name_1' => $this->card_name_1,
            'card_amount_1' => $this->card_amount_1,
            'card_image_2' => $this->card_image_2,
            'card_name_2' => $this->card_name_2,
            'card_amount_2' => $this->card_amount_2,
            'card_image_3' => $this->card_image_3,
            'card_name_3' => $this->card_name_3,
            'card_amount_3' => $this->card_amount_3,
        ]);
        $this->topAffiliates = TopAffiliate::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Top Affiliate added successfully!']);
        $this->alertMessage('success', 'Operation success','Top Affiliate added successfully!');
    }
    public function edit($topAffiliateId){
        $this->selectedTopAffiliates = TopAffiliate::find($topAffiliateId);
        $this->topAffiliateId = $topAffiliateId;
        $this->subtitle = $this->selectedTopAffiliates->subtitle;
        $this->title = $this->selectedTopAffiliates->title;
        $this->description = $this->selectedTopAffiliates->description;
        $this->card_image_1 = $this->selectedTopAffiliates->card_image_1;
        $this->card_name_1 = $this->selectedTopAffiliates->card_name_1;
        $this->card_amount_1 = $this->selectedTopAffiliates->card_amount_1;
        $this->card_image_2 = $this->selectedTopAffiliates->card_image_2;
        $this->card_name_2 = $this->selectedTopAffiliates->card_name_2;
        $this->card_amount_2 = $this->selectedTopAffiliates->card_amount_2;
        $this->card_image_3 = $this->selectedTopAffiliates->card_image_3;
        $this->card_name_3 = $this->selectedTopAffiliates->card_name_3;
        $this->card_amount_3 = $this->selectedTopAffiliates->card_amount_3;
    }
    public function update(){
        // $this->validate();
        $topAffiliate = TopAffiliate::find($this->topAffiliateId);
        $this->deleteImage(
            $topAffiliate->card_image_1,$this->card_image_1
        );
        $this->deleteImage(
            $topAffiliate->card_image_2,$this->card_image_2
        );
        $this->deleteImage(
            $topAffiliate->card_image_3,$this->card_image_3
        );
        if ($this->card_image_1 instanceof UploadedFile) {
            $this->validate([
                'card_image_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_image_1 = $this->card_image_1->store('TopAffiliateIcons', 'public');
            $topAffiliate->card_image_1 = $this->card_image_1;
        }
        
        if ($this->card_image_2 instanceof UploadedFile) {
            $this->validate([
                'card_image_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_image_2 = $this->card_image_2->store('TopAffiliateIcons', 'public');
            $topAffiliate->card_image_2 = $this->card_image_2;
        }

        if ($this->card_image_3 instanceof UploadedFile) {
            $this->validate([
                'card_image_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_image_3 = $this->card_image_3->store('TopAffiliateIcons', 'public');
            $topAffiliate->card_image_3 = $this->card_image_3;
        }
       
        $topAffiliate->subtitle = $this->subtitle;
        $topAffiliate->title = $this->title;
        $topAffiliate->description = $this->description;
        $topAffiliate->card_name_1 = $this->card_name_1;
        $topAffiliate->card_amount_1 = $this->card_amount_1;
        $topAffiliate->card_name_2 = $this->card_name_2;
        $topAffiliate->card_amount_2 = $this->card_amount_2;
        $topAffiliate->card_name_3 = $this->card_name_3;
        $topAffiliate->card_amount_3 = $this->card_amount_3;
        $topAffiliate->save();
        $this->topAffiliates = TopAffiliate::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Top Affiliate updated successfully!']);
        $this->alertMessage('success', 'Operation success','Top Affiliate updated successfully!');
    }
    public function delete($topAffiliateId){

        TopAffiliate::find($topAffiliateId)->delete();
        $this->topAffiliates = TopAffiliate::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Top Affiliate deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Top Affiliate deleted successfully!');
    }
    protected function deleteImage($oldImagePath, $newImage)
    {
        if ($newImage instanceof UploadedFile) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }
    }
    public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->card_image_1 = '';
        $this->card_name_1 = '';
        $this->card_amount_1 = '';
        $this->card_image_2 = '';
        $this->card_name_2 = '';
        $this->card_amount_2 = '';
        $this->card_image_3 = '';
        $this->card_name_3 = '';
        $this->card_amount_3 = '';
    }
    private function handleFileUpload($field)
    {
        if ($this->{$field} instanceof UploadedFile) {
            $extension = $this->{$field}->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $this->{$field} = $this->{$field}->storeAs('TopAffiliateIcons', $filename, 'public');
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
        $this->dispatch('hide-modal'); // You may need to handle modal hiding through JavaScript
    }

    public function render()
    {
        return view('livewire.admin.pages.top-affiliates.top-affiliates');
    }
}
