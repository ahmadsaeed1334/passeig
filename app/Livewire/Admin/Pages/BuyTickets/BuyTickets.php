<?php

namespace App\Livewire\Admin\Pages\BuyTickets;

use App\Models\BuyTicket;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]

class BuyTickets extends Component
{
    use LivewireAlert;
    public $buyTickets;
    public $subtitle, $title, $description;
    public $btn_title, $btn_text, $cart_top_text,
    $cart_amount_1, $cart_text_1, 
    $cart_amount_2, $cart_text_2;
    public $selectedBuyTickets, $buyTicketId;

    public function mount() 
    {
        $this->buyTickets = BuyTicket::all();
    }
    protected $rules = [
        'subtitle' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'btn_title' => 'required|string',
        'btn_text' => 'required|string',
        'cart_top_text' => 'required|string',
        'cart_amount_1' => 'required|decimal:2',
        'cart_text_1' => 'required|string',
        'cart_amount_2' => 'required|decimal:2',
        'cart_text_2' => 'required|string',
    ];

    public function create(){
        $this->validate();
        BuyTicket::create([
           'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'btn_title' => $this->btn_title,
            'btn_text' => $this->btn_text,
            'cart_top_text' => $this->cart_top_text,
            'cart_amount_1' => $this->cart_amount_1,
            'cart_text_1' => $this->cart_text_1,
            'cart_amount_2' => $this->cart_amount_2,
            'cart_text_2' => $this->cart_text_2,
        ]);
        $this->buyTickets = BuyTicket::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'success', 'message' => 'Buy Ticket added successfully!']);
        $this->alertMessage('success', 'Operation success', 'Buy Ticket added successfully!');
    }

    public function edit($id){
        $this->selectedBuyTickets = BuyTicket::find($id);
        $this->buyTicketId = $id;
        $this->subtitle = $this->selectedBuyTickets->subtitle;
        $this->title = $this->selectedBuyTickets->title;
        $this->description = $this->selectedBuyTickets->description;
        $this->btn_title = $this->selectedBuyTickets->btn_title;
        $this->btn_text = $this->selectedBuyTickets->btn_text;
        $this->cart_top_text = $this->selectedBuyTickets->cart_top_text;
        $this->cart_amount_1 = $this->selectedBuyTickets->cart_amount_1;
        $this->cart_text_1 = $this->selectedBuyTickets->cart_text_1;
        $this->cart_amount_2 = $this->selectedBuyTickets->cart_amount_2;
        $this->cart_text_2 = $this->selectedBuyTickets->cart_text_2;
    }
    public function update(){
        $this->validate();
        BuyTicket::find($this->buyTicketId)->update([
           'subtitle' => $this->subtitle,
            'title' => $this->title,
            'description' => $this->description,
            'btn_title' => $this->btn_title,
            'btn_text' => $this->btn_text,
            'cart_top_text' => $this->cart_top_text,
            'cart_amount_1' => $this->cart_amount_1,
            'cart_text_1' => $this->cart_text_1,
            'cart_amount_2' => $this->cart_amount_2,
            'cart_text_2' => $this->cart_text_2,
        ]);
        $this->buyTickets = BuyTicket::all();
        $this->resetFields();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'info', 'message' => 'Buy Ticket updated successfully!']);
        $this->alertMessage('success', 'Operation success', 'Buy Ticket updated successfully!');
    }
    public function delete($id){
        BuyTicket::find($id)->delete();
        $this->buyTickets = BuyTicket::all();
        $this->dispatch('hide-modal');
        $this->dispatch('showAlert', ['type' => 'danger', 'message' => 'Buy Ticket deleted successfully!']);
        $this->alertMessage('success', 'Operation success', 'Buy Ticket deleted successfully!');
    }

    public function resetFields(){
        $this->subtitle = '';
        $this->title = '';
        $this->description = '';
        $this->btn_title = '';
        $this->btn_text = '';
        $this->cart_top_text = '';
        $this->cart_amount_1 = '';
        $this->cart_text_1 = '';
        $this->cart_amount_2 = '';
        $this->cart_text_2 = '';
        $this->selectedBuyTickets = [];
        $this->buyTicketId = '';
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
        return view('livewire.admin.pages.buy-tickets.buy-tickets');
    }
}
