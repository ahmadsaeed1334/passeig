<?php

namespace App\Livewire\Admin\Pages\TermsConditions;

use App\Models\TermsCondition;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class TermsConditions extends Component
{
    use LivewireAlert;
    // protected $listeners = ['trixContentChanged'];
    public $termsConditions;
    public $contentsId;
    public $content;
    public $selectedcontents;
    public function mount()
    {
        $this->termsConditions = TermsCondition::all();
        $this->dispatch('initCkEditor', ['#content' => $this->content]); 

    }
    public function create(){

        $this->validate([
            'content' =>'required',
        ]);
       TermsCondition::create([
            'content' => $this->content
        ]);
        $this->termsConditions = TermsCondition::all();
        
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Terms Condition added successfully!']);
        $this->alertMessage('success', 'Operation success','Terms Condition added successfully!');
    }
    public function TermsConditionEdit($id){
        $this->contentsId = $id;
        $this->selectedcontents = TermsCondition::find($id);
        $this->content = $this->selectedcontents->content;
        // $this->dispatch('initCkEditor', ['#contentEdit' => $this->content]); 

        // dd($this->content); 
        // $this->dispatch('contentLoaded', ['content' => $this->content]);

    }
    public function updatedContent($value)
{
    $this->content = $value;
}
    public function update(){
        $this->validate([
            'content' =>'required'
        ]);

        TermsCondition::find($this->contentsId)->update([
            'content' => $this->content
        ]);
        $this->termsConditions = TermsCondition::all();
        // dd( $this->termsConditions);
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Terms Condition updated successfully!']);
        $this->alertMessage('success', 'Operation success','Terms Condition updated successfully!');
    }
    public function resetFields(){
        $this->content = '';
    }
    

    public function delete($contentsId){
        // dd($contentsId);
        TermsCondition::find($contentsId)->delete();
        $this->termsConditions = TermsCondition::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Terms Condition deleted successfully!']);
        $this->alertMessage('success', 'Operation success','Terms Condition deleted successfully!');
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
        $this->dispatch('hide-modal');
    }
    public function render()
    {
        return view('livewire.admin.pages.terms-conditions.terms-conditions');
    }
}
