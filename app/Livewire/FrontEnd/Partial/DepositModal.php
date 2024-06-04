<?php

namespace App\Livewire\FrontEnd\Partial;

use App\Models\DepositRequest;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.front')]
class DepositModal extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $description;
    public $amount;
    public $file;
    public $comment;
    public $account_details = [
        'account_number' => '1234567890',
        'account_name' => 'John Doe',
        'methods' => ['JazzCash', 'EasyPaisa'],
    ];
    protected $rules = [
        'amount' => 'required|numeric|min:1',
        'file' => 'required|file|max:10240',
        'comment' => 'nullable|string',
    ];
    public function mount()
    {
        $this->description = 'Please provide the necessary details to deposit funds to the following account:';
    }
    public function submit()
    {
        $this->validate();
        $filePath = $this->file->store('deposit_files', 'public');
        DepositRequest::create([
            'user_id' => Auth::id(),
            // 'description' => $this->description,
            'amount' => $this->amount,
            'file_path' => $filePath,
            'comment' => $this->comment,
            'status' => 'pending',
        ]);
        // session()->flash('message', 'Deposit request submitted successfully.');
        $this->alertMessage('success', 'Operation success', 'Deposit request submitted successfully.');
        $this->reset(); // Reset all form fields
        // Close the modal after submission
        $this->dispatch('closeModal');
    }
    public function render()
    {
        return view('livewire.front-end.partial.deposit-modal', [
            'account_details' => $this->account_details,
        ]);
    }
    public function alertMessage($type = null, $title = null, $message = null, $position = null)
    {
        $backgroundColors = [
            'success' => '#00FF00',
            'error' => '#dc3545',
            'warning' => '#ffc107',
        ];
        $backgroundColor = $type ? $backgroundColors[$type] ?? alert('background') : alert('background');
        $this->alert($type ? $type : 'success', $title ? $title : alert('title'), [
            'position' => $position ? $position : alert('position'),
            'timer' =>  alert('timer'),
            'toast' =>  true,
            'text' => $message ? $message : alert('message'),
            'background' => $backgroundColor,
        ]);
    }
}
