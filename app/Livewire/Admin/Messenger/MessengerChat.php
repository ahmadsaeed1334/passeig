<?php

namespace App\Livewire\Admin\Messenger;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class MessengerChat extends Component
{
    public $currentThread;

    protected $listeners = ['loadChat' => 'load', 'reload' => '$refresh'];

    public function load($id)
    {
        dd($id);
        $this->currentThread = $this->threads->where('id', $id)->first();
        if ($this->currentThread) {
            $user = Auth::user();

            // Modify the participants to include their details
            $this->currentThread->participants->each(function ($participant) {
                $participant->participant_name = $participant->user->name;
                $participant->participant_avatar = $participant->user->profile_photo_url;
                $participant->participant_is_online = $participant->user->isOnline();
            });

            // If there are exactly 2 participants, sender is the other participant
            if ($this->currentThread->participants_count === 2) {
                $otherParticipant = $this->currentThread->participants->where('user_id', '!=', $user->id)->first();
                $this->currentThread->sender_name = $otherParticipant->participant_name;
                $this->currentThread->sender_avatar = $otherParticipant->participant_avatar;
                $this->currentThread->sender_is_online = $otherParticipant->participant_is_online;
            } else {
                $this->currentThread->sender_name = $this->currentThread->subject;
                $this->currentThread->sender_avatar = null;
                $this->currentThread->sender_is_online = false;
            }

            // Modify the messages to include sender details
            $this->currentThread->messages->each(function ($message) {
                $message->sender_name = $message->user->name;
                $message->sender_is_online = $message->user->isOnline();
                // Assuming that 'created_at' field holds the message time
                $message->time = diff_for_humans_long($message->created_at);
            });
        }
    }

    public function render()
    {
        return view('livewire.admin.messenger.messenger-chat');
    }
}
