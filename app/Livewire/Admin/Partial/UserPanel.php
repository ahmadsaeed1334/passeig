<?php

namespace App\Livewire\Admin\Partial;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class UserPanel extends Component
{
    use WithFileUploads, LivewireAlert;
    use LivewireAlert;

    public $command, $app_debug, $news, $news_till, $news_title;

    public $photo, $authUser;

    protected $listeners = ['reload' => '$refresh'];

    public function news()
    {
        $this->validate(
            [
                'news' => 'required',
            ],
            [
                'news.required' => 'The :attribute cannot be empty.',
            ],
            [
                'news' => 'News',
            ]
        );
        setting([
            'news' => $this->news,
            'news_till' => $this->news_till,
            'news_title' => $this->news_title,
        ])->save();
        $this->dispatch('refreshPhoto');
        $this->alert('success', 'News Updated Successfully!', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function updatedAppDebug()
    {
        if ($this->app_debug) {
            custom_command("env:set APP_DEBUG=true");
        } else {
            custom_command("env:set APP_DEBUG=false");
        }
        $this->alert('success', 'Command Run Successfully!', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function updatedCommand()
    {
        // dispatch(function () {
        ini_set('memory_limit', '-1');
        $status = custom_command($this->command);
        // })->delay(now());

        $this->alert($status ? 'success' : 'error',  $status ? $this->command . ' Run Successfully!' : 'Command Not found', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
        $this->command = null;
    }

    public function custom_command()
    {
        $this->validate(
            [
                'command' => 'required',
            ],
            [
                'command.required' => 'The :attribute cannot be empty.',
            ],
            [
                'command' => 'Command',
            ]
        );
        // dispatch(function () {
        ini_set('memory_limit', '-1');
        $status = custom_command($this->command);
        // })->delay(now());
        $this->command = null;
        $this->alert('success', $status ? 'Command Run Successfully!' : 'Command Not found', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  3000,
            'toast' =>  true,
            'text' => '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        $delete = User::whereId(auth()->id())->first();
        Storage::disk('public')->delete($delete->profile_photo_path);
        $delete->forceFill([
            'profile_photo_path' => null
        ])->save();

        $photo = Image::make($this->photo)->encode('jpg', 75);
        $this->photo = $this->photo->hashname();
        Storage::disk('public')->put('profile-photos/' . $this->photo, $photo);
        $delete->update([
            'profile_photo_path' => 'profile-photos/' . $this->photo,
        ]);
        // $this->photo->store('public/profile-photos');
        $this->photo = null;
        $this->dispatch('refreshPhoto');
        $this->alert('success', 'Avatar Updated Successfully.', [
            'position' =>  setting('general_settings.alert_position'),
            'timer' =>  5000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function mount()
    {
        $this->app_debug = env('APP_DEBUG');
        $this->news = setting('news');
        $this->news_till = setting('news_till');
        $this->news_title = setting('news_title');
    }

    public function render()
    {
        return view('livewire.admin.partial.user-panel');
    }
}
