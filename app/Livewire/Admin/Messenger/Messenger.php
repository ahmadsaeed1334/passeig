<?php

namespace App\Livewire\Admin\Messenger;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Arr;
use Cmgmyr\Messenger\Models\Thread;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Cmgmyr\Messenger\Models\Participant;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class Messenger extends Component
{
    use LivewireAlert;

    public $user;
    public $search;
    public $searchUser;
    public $results = [];
    public $threadId;
    public $threads;
    public $currentThread;
    public $subject;
    public $message;
    public $newContacts = [];
    public $increment;
    public $body;
    public $isView = false;
    protected $listeners = ['reload' => '$refresh'];

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function closeChat()
    {
        $this->threads = null;
        $this->threadId = null;
        $this->currentThread = null;
    }

    public function resetChat()
    {
        $this->search = null;
        $this->results = [];
        $this->newContacts = [];
    }

    public function updatedSearch()
    {
        if ($this->search)
            $this->results = User::where('id', '!=', $this->user->id)->search($this->search)->get();
        else
            $this->results = [];
    }

    public function sendMessage($threadId)
    {
        // Validation
        $this->validate([
            'body' => 'required',
        ]);

        $message = new Message();
        $message->body = $this->body;
        $message->user_id = $this->user->id;
        $message->thread_id = $threadId;
        $message->save();

        $this->body = ""; // Clear the input field

        $this->getLoad($threadId); // Refresh the current thread

        $this->dispatch('keysTop');
    }


    public function getLoad($id = null)
    {
        $this->threads = $this->getThreads();
        // dd($this->threads);
        if ($id) {
            $this->currentThread = $this->threads->where('id', $id)->first();
            $this->currentThread->markAsRead(auth()->id());
            if ($this->currentThread) {

                // Modify the participants to include their details
                $this->currentThread->participants->each(function ($participant) {
                    $participant->participant_name = $participant->user->name;
                    $participant->participant_email = $participant->user->email;
                    $participant->participant_id = $participant->user->id;
                    $participant->participant_avatar = $participant->user->profile_photo_url;
                    $participant->participant_is_online = $participant->user->isOnline();
                });

                // If there are exactly 2 participants, sender is the other participant
                if ($this->currentThread->participants_count === 2) {
                    $otherParticipant = $this->currentThread->participants->where('user_id', '!=', $this->user->id)->first();
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
            // dd($this->currentThread);
     
            $this->dispatch('keysTop');
        }
    }

    public function getThreads()
    {
        $user = $this->user;
        $searchTerm = $this->searchUser;

        $query = $user->threads()
            ->with('participants.user', 'messages.user')
            ->withCount([
                'participants',
                'messages as user_unread_messages_count' => function ($query) use ($user) {
                    $query->unreadForUser($user->id);
                }
            ])
            ->orderBy('updated_at', 'desc');

        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('subject', 'like', "%$searchTerm%")
                    ->orWhereHas('participants.user', function ($query) use ($searchTerm) {
                        $query->where('name', 'like', "%$searchTerm%")
                            ->orWhere('id', $searchTerm)
                            ->orWhere('email', 'like', "%$searchTerm%");
                    });
            });
        }

        $threads = $query->get();

        return $threads->map(function ($thread) use ($user) {
            if ($thread->participants_count === 2) {
                $otherParticipant = $thread->participants->where('user_id', '!=', $user->id)->first();
                $thread->participant_name = $otherParticipant->user->name;
                $thread->participant_avatar = $otherParticipant->user->profile_photo_url;
                $thread->participant_is_online = $otherParticipant->user->isOnline();
                $thread->last_message = $thread->messages->last();
                $thread->unread_messages_count = $thread->user_unread_messages_count;
            } else {
                $thread->participant_name = $thread->subject;
                $thread->participant_avatar = null;
                $thread->participant_is_online = false;
                $thread->last_message = $thread->messages->last();
                $thread->unread_messages_count = $thread->user_unread_messages_count;
            }
            return $thread;
        });
    }

    public function createThread()
    {
        $this->validate(
            [
                'subject' => 'required',
                'newContacts.*' => 'exists:users,id',
            ],
            [
                'subject.required' => 'The :attribute cannot be empty.',
                'newContacts.required' => 'Must Select At least One :attribute.',
            ],
            [
                'subject' => 'Subject',
                'newContacts' => 'User',
            ]
        );

        $thread = Thread::create([
            'subject' => $this->subject,
        ]);

        // Add the current user as a participant
        $participant = Participant::create([
            'thread_id' => $thread->id,
            'user_id' => $this->user->id,
        ]);

        // Create the initial message
        // if ($this->message)
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => $this->user->id,
            'is' => 1,
            'body' => $this->message ?: 'created by ' . $this->user->name,
        ]);

        // Add additional contacts to the thread
        if ($this->newContacts) {
            $contacts = array_diff($this->newContacts, [$this->user->id]); // Remove the current user from the contacts
            foreach ($contacts as $contactId) {
                Participant::create([
                    'thread_id' => $thread->id,
                    'user_id' => $contactId,
                ]);
                $user = User::find($contactId);
                $message = new Message();
                $message->body = "{$user->name} was added to the conversation.";
                $message->user_id = auth()->id();
                $message->is = 1;
                $message->thread_id = $thread->id;
                $message->save();
            }
        }


        // Refresh the threads list
        $this->threads = $this->getThreads();

        // Clear the form fields
        $this->subject = '';
        $this->message = '';
        $this->newContacts = [];
        $this->search = null;
        $this->results = [];
        $this->alertMessage('success', 'Operation success',);
    }

    public function addNewContact($contactId)
    {

        // If the user is already selected, remove them
        if (in_array($contactId, $this->newContacts)) {
            // array_search finds the key of a value in an array
            $key = array_search($contactId, $this->newContacts);
            unset($this->newContacts[$key]);
        } else {
            // Else add the user to the array
            $this->newContacts[] = $contactId;
        }
        // dd($this->newContacts);
    }

    public function addContact()
    {
        // Create a new thread if the current thread doesn't exist
        if (!$this->currentThread) {
            $thread = Thread::create([
                'subject' => $this->subject,
            ]);

            // Add the current user as a participant
            Participant::create([
                'thread_id' => $thread->id,
                'user_id' => $this->user->id,
            ]);

            // Set the current thread to the newly created thread
            $this->currentThread = $thread;
        }

        // Add the selected user(s) as participant(s) in the current thread
        $newContacts = collect($this->newContacts)->unique()->values()->all();

        foreach ($newContacts as $contactId) {
            // Check if the contact is already a participant in the current thread
            $existingParticipant = Participant::where('thread_id', $this->currentThread->id)
                ->where('user_id', $contactId)
                ->exists();

            // If the contact is not already a participant, add them
            if (!$existingParticipant) {
                Participant::create([
                    'thread_id' => $this->currentThread->id,
                    'user_id' => $contactId,
                ]);
                $user = User::find($contactId);
                $message = new Message();
                $message->body = "{$user->name} was added to the conversation.";
                $message->user_id = auth()->id();
                $message->is = 1;
                $message->thread_id = $this->currentThread->id;
                $message->save();
            }
        }

        // Refresh the current thread
        $this->currentThread = Thread::find($this->currentThread->id);

        // Clear the newContacts array
        $this->newContacts = [];

        // Clear the search field
        $this->search = null;
        $this->alertMessage('success', 'Operation success',);
    }



    public function removeContact($userId)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        // Remove the selected user as a participant from the current thread
        Participant::where('thread_id', $this->currentThread->id)
            ->where('user_id', $userId)
            ->delete();

        // Create a system message that says the user was removed
        $user = User::find($userId);
        $message = new Message();
        $message->body = "{$user->name} was removed from the conversation.";
        $message->user_id = auth()->id();
        $message->is = 1;
        $message->thread_id = $this->currentThread->id;
        $message->save();

        // Refresh the current thread
        $this->getLoad($this->currentThread->id);
        $this->alertMessage('success', 'Operation success',);
    }

    public function deleteMessage($messageId)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $message = Message::find($messageId);

        // Check if the user is authorized to delete the message
        // if (Auth::user()->id != $message->user_id) {
        //     return; // Optionally, add an error message here
        // }
        $message->body = "This message was deleted by " . $this->user->name;
        $message->save();
        // $message->delete();

        // Refresh the current thread
        $this->getLoad($this->currentThread->id);
        $this->alertMessage('success', 'Operation success',);
    }

    public function forceDeleteConversation($threadId)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        // Fetch the thread
        $thread = Thread::findOrFail($threadId);

        // First, we'll delete all messages associated with the thread
        Message::where('thread_id', $thread->id)->forceDelete();

        // Then we'll delete all participants associated with the thread
        Participant::where('thread_id', $thread->id)->forceDelete();

        // Finally, we delete the thread itself
        $thread->forceDelete();

        // You may also want to refresh your threads
        $this->currentThread = null;
        $this->threadId = null;
        $this->threads = $this->getThreads();
        $this->alertMessage('success', 'Operation success',);
    }


    public function render()
    {
        $this->getLoad($this->threadId);
        return view('livewire.admin.messenger.messenger', [
            'threads' => $this->threads,
            'currentThread' => $this->currentThread,
        ]);
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
}
