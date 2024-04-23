<?php

namespace App\Livewire\Admin\Pages\AffiliatePartners;

use App\Models\AffiliatePartner;
use Illuminate\Http\UploadedFile;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class AffiliatePartners extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $affiliatePartners;
    public $subtitle, $title, $description;
    public $card_icon_1, $card_title_1, $card_description_1;
    public $card_icon_2, $card_title_2, $card_description_2;
    public $card_icon_3, $card_title_3, $card_description_3;
    public $card_icon_4, $card_title_4, $card_description_4;
    public $selectedAffiliatePartners, $affiliatePartnerId;

    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'card_icon_1' => 'required|nullable||image|max:3072',
        'card_title_1' => 'required|nullable|string',
        'card_description_1' => 'required|nullable|string',
        'card_icon_2' => 'required|nullable||image|max:3072',
        'card_title_2' => 'required|nullable|string',
        'card_description_2' => 'required|nullable|string',
        'card_icon_3' => 'required|nullable||image|max:3072',
        'card_title_3' => 'required|nullable|string',
        'card_description_3' => 'required|nullable|string',
        'card_icon_4' => 'required|nullable||image|max:3072',
        'card_title_4' => 'required|nullable|string',
        'card_description_4' => 'required|nullable|string',
    ];
    public function mount()
    {
        $this->affiliatePartners = AffiliatePartner::all();
    }
    public function create(){
        $this->validate();
    
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->card_icon_1 = $this->card_icon_1->store('AffiliatePartnerIcons', 'public');
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->card_icon_2 = $this->card_icon_2->store('AffiliatePartnerIcons', 'public');
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->card_icon_3 = $this->card_icon_3->store('AffiliatePartnerIcons', 'public');
        }
        if ($this->card_icon_4 instanceof UploadedFile) {
            $this->card_icon_4 = $this->card_icon_4->store('AffiliatePartnerIcons', 'public');
        }

        AffiliatePartner::create([
          'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'card_icon_1' => $this->card_icon_1,
            'card_title_1' => $this->card_title_1,
            'card_description_1' => $this->card_description_1,
            'card_icon_2' => $this->card_icon_2,
            'card_title_2' => $this->card_title_2,
            'card_description_2' => $this->card_description_2,
            'card_icon_3' => $this->card_icon_3,
            'card_title_3' => $this->card_title_3,
            'card_description_3' => $this->card_description_3,
            'card_icon_4' => $this->card_icon_4,
            'card_title_4' => $this->card_title_4,
            'card_description_4' => $this->card_description_4,

        ]);
        $this->affiliatePartners = AffiliatePartner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Affiliate Partner added successfully!']);
        $this->alertMessage();

    }
    public function edit($affiliatePartnerId){
        $this->affiliatePartnerId = $affiliatePartnerId;
        $this->selectedAffiliatePartners = AffiliatePartner::find($affiliatePartnerId);
        $this->subtitle = $this->selectedAffiliatePartners->subtitle;
        $this->title = $this->selectedAffiliatePartners->title;
        $this->description = $this->selectedAffiliatePartners->description;
        $this->card_icon_1 = $this->selectedAffiliatePartners->card_icon_1;
        $this->card_title_1 = $this->selectedAffiliatePartners->card_title_1;
        $this->card_description_1 = $this->selectedAffiliatePartners->card_description_1;
        $this->card_icon_2 = $this->selectedAffiliatePartners->card_icon_2;
        $this->card_title_2 = $this->selectedAffiliatePartners->card_title_2;
        $this->card_description_2 = $this->selectedAffiliatePartners->card_description_2;
        $this->card_icon_3 = $this->selectedAffiliatePartners->card_icon_3;
        $this->card_title_3 = $this->selectedAffiliatePartners->card_title_3;
        $this->card_description_3 = $this->selectedAffiliatePartners->card_description_3;
        $this->card_icon_4 = $this->selectedAffiliatePartners->card_icon_4;
        $this->card_title_4 = $this->selectedAffiliatePartners->card_title_4;
        $this->card_description_4 = $this->selectedAffiliatePartners->card_description_4;
    }
    public function update(){
       
         $affiliatePartner =  AffiliatePartner::find($this->affiliatePartnerId);
         
        if ($this->card_icon_1 instanceof UploadedFile) {
            $this->validate([
                'card_icon_1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_1 = $this->card_icon_1->store('AffiliatePartnerIcons', 'public');
            $affiliatePartner->card_icon_1 = $this->card_icon_1;
        }
        if ($this->card_icon_2 instanceof UploadedFile) {
            $this->validate([
                'card_icon_2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_2 = $this->card_icon_2->store('AffiliatePartnerIcons', 'public');
            $affiliatePartner->card_icon_2 = $this->card_icon_2;
        }
        if ($this->card_icon_3 instanceof UploadedFile) {
            $this->validate([
                'card_icon_3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_3 = $this->card_icon_3->store('AffiliatePartnerIcons', 'public');
            $affiliatePartner->card_icon_3 = $this->card_icon_3;
        }
        if ($this->card_icon_4 instanceof UploadedFile) {
            $this->validate([
                'card_icon_4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $this->card_icon_4 = $this->card_icon_4->store('AffiliatePartnerIcons', 'public');
            $affiliatePartner->card_icon_4 = $this->card_icon_4;
        }
        $affiliatePartner->subtitle = $this->subtitle;
        $affiliatePartner->title = $this->title;
        $affiliatePartner->description = $this->description;
        $affiliatePartner->card_title_1 = $this->card_title_1;
        $affiliatePartner->card_description_1 = $this->card_description_1;
        $affiliatePartner->card_title_2 = $this->card_title_2;
        $affiliatePartner->card_description_2 = $this->card_description_2;
        $affiliatePartner->card_title_3 = $this->card_title_3;
        $affiliatePartner->card_description_3 = $this->card_description_3;
        $affiliatePartner->card_title_4 = $this->card_title_4;
        $affiliatePartner->card_description_4 = $this->card_description_4;
        $affiliatePartner->save();
        $this->affiliatePartners = AffiliatePartner::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Affiliate Partner updated successfully!']);
        $this->alertMessage();
    }
    public function delete($affiliatePartnerId){
        AffiliatePartner::find($affiliatePartnerId)->delete();
        $this->affiliatePartners = AffiliatePartner::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Affiliate Partner deleted successfully!']);
        $this->alertMessage();
    }
    public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->card_icon_1 = '';
        $this->card_title_1 = '';
        $this->card_description_1 = '';
        $this->card_icon_2 = '';
        $this->card_title_2 = '';
        $this->card_description_2 = '';
        $this->card_icon_3 = '';
        $this->card_title_3 = '';
        $this->card_description_3 = '';
        $this->card_icon_4 = '';
        $this->card_title_4 = '';
        $this->card_description_4 = '';
    }
    private function handleFileUpload($field)
    {
        if ($this->{$field} instanceof UploadedFile) {
            $extension = $this->{$field}->getClientOriginalExtension();
            $filename = uniqid() . '.' . $extension;
            $this->{$field} = $this->{$field}->storeAs('AffiliatePartnerIcons', $filename, 'public');
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
        return view('livewire.admin.pages.affiliate-partners.affiliate-partners');
    }
}
