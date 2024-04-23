<?php

namespace App\Livewire\Admin\Footers;

use App\Models\FooterIcon;
use App\Models\FooterText;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Footers extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $footerIcons;
    public $icon_class;
    public $url;
    public $selectedId;
    public $footerTexts;
    public $text;
    public $link_text;
    public $link_url;
    public $footerSelectedId;
    public function mount()
    {
        $this->footerIcons = FooterIcon::all();
        $this->footerTexts = FooterText::all();
    }

    public function create()
{
    $this->validate([
        'icon_class' =>'required',
        'url' =>'required',
    ]);
    FooterIcon::create([
        'icon_class' => $this->icon_class,
        'url' => $this->url,
    ]);
    $this->resetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Footer Icon Added successfully!']);
    $this->alertMessage();
}
public function footerTextCreate(){
    $this->validate([
        'text' =>'required',
        'link_text' =>'required',
        'link_url' =>'required',
    ]);
    FooterText::create([
        'text' => $this->text,
        'link_text' => $this->link_text,
        'link_url' => $this->link_url,
    ]);
    $this->foooterResetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Footer Text Added successfully!']);
    $this->alertMessage();
}
public function edit($id)
{
    $this->selectedId = $id;
    $footerIcon = FooterIcon::find($id);
    $this->icon_class = $footerIcon->icon_class;
    $this->url = $footerIcon->url;
}
public function footerTextEdit($id){
    $this->footerSelectedId = $id;
    $footerText = FooterText::find($id);
    $this->text = $footerText->text;
    $this->link_text = $footerText->link_text;
    $this->link_url = $footerText->link_url;
}
public function update(){
    $this->validate([
        'icon_class' =>'required',
        'url' =>'required',
    ]);
    FooterIcon::find($this->selectedId)->update([
        'icon_class' => $this->icon_class,
        'url' => $this->url,
    ]);
    $this->resetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Footer Icon Updated successfully!']);
    $this->alertMessage();
}
public function footerTextUpdate(){
    $this->validate([
        'text' =>'required',
        'link_text' =>'required',
        'link_url' =>'required',
    ]);
    FooterText::find($this->footerSelectedId)->update([
        'text' => $this->text,
        'link_text' => $this->link_text,
        'link_url' => $this->link_url,
    ]);
    $this->foooterResetFields();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Footer Text Updated successfully!']);
    $this->alertMessage();
}
public function delete($id)
{
    FooterIcon::find($id)->delete();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Footer Icon Deleted successfully!']);
    $this->alertMessage();
}
public function footerTextDelete($id){
    FooterText::find($id)->delete();
    $this->dispatch('hide-modal');
    $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Footer Text Deleted successfully!']);
    $this->alertMessage();
}

public function resetFields()
{
    $this->icon_class = '';
    $this->url = '';
    $this->selectedId = '';
}
public function foooterResetFields()
{
    $this->text = '';
    $this->link_text = '';
    $this->link_url = '';
    $this->footerSelectedId = '';
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
public function footerdiscardChanges()
{
    $this->foooterResetFields();
    $this->dispatch('hide-modal'); // You may need to handle modal hiding through JavaScript
}
    public function render()
    {
        return view('livewire.admin.footers.footers');
    }
}
