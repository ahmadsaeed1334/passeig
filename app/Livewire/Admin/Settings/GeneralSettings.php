<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Facades\UtilityFacades;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class GeneralSettings extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    protected $listeners = ['refreshData' => 'refreshData', 'refreshPhoto' => '$refresh', 'reload' => '$refresh'];

    public $app_name,
        $app_description,
        $email,
        $website,
        $phone,
        $fax,
        $address,
        $app_timezone,
        $default_password,
        $page_size,
        $report_page_size,
        $students_for_enroll_modal,
        $test_passing_marks,
        $access_from,
        $access_to,
        $custom_date_format, $layout,
        $color,
        $language;

    public $userAvatar,
        $photo,
        $deletePhoto;

    public $blacklogo,
        $logo,
        $deletelogo;

    public $favicon,
        $icon,
        $deleteicon;

    public $languages;


    public function refreshData()
    {
        if (general('logo')) {
            $this->userAvatar = env('APP_URL') . '/storage' . '/' . general('logo');
            $this->deletePhoto = general('logo');
        } else
            $this->userAvatar = null;

        if (general('logo_black')) {
            $this->blacklogo = env('APP_URL') . '/storage' . '/' . general('logo_black');
            $this->deletelogo = general('logo_black');
        } else
            $this->blacklogo = null;

        if (general('favicon')) {
            $this->favicon = env('APP_URL') . '/storage' . '/' . general('favicon');
            $this->deleteicon = general('favicon');
        } else
            $this->favicon = null;
    }

    public function resetInputFields()
    {
        $this->photo = null;
        $this->deletePhoto = null;
    }

    public function updatedIcon()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate([
            'icon' => 'image|max:10024',
        ]);
        Storage::disk('public')->delete(general('favicon'));
        setting([
            'general_settings.favicon' => null,
        ])->save();

        $icon = Image::make($this->icon)->encode('png', 75);
        $this->icon = $this->icon->hashname();
        Storage::disk('public')->put('logo/' . $this->icon, $icon);
        // dd($this->icon);

        setting([
            'general_settings.favicon' => 'logo/' . $this->icon,
        ])->save();
        $this->deleteicon = $this->icon;
        // $this->logo->store('public/profile-logos');
        $this->icon = null;
        $this->dispatch('reload');
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
        'Avatar Updated Successfully.');
    }

    public function icondelete()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        if ($this->deleteicon) {
            Storage::disk('public')->delete(general('favicon'));
            setting([
                'general_settings.favicon' => null,
            ])->save();
            $this->deleteicon = null;
            $this->favicon = null;
        } elseif ($this->icon) {
            $this->icon = null;
        }
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
        'Avatar Updated Successfully.');
    }

    public function updatedLogo()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate([
            'logo' => 'image|max:10024',
        ]);
        Storage::disk('public')->delete(general('logo_black'));
        setting([
            'general_settings.logo_black' => null,
        ])->save();

        $logo = Image::make($this->logo)->encode('png', 75);
        $this->logo = $this->logo->hashname();
        Storage::disk('public')->put('logo/' . $this->logo, $logo);
        // dd($this->logo);

        setting([
            'general_settings.logo_black' => 'logo/' . $this->logo,
        ])->save();
        $this->deletelogo = $this->logo;
        // $this->logo->store('public/profile-logos');
        $this->logo = null;
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
        'Avatar Updated Successfully.');
    }

    public function logodelete()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        if ($this->deletelogo) {
            Storage::disk('public')->delete(general('logo_black'));
            setting([
                'general_settings.logo_black' => null,
            ])->save();
            $this->deletelogo = null;
            $this->blacklogo = null;
        } elseif ($this->logo) {
            $this->logo = null;
        }
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
        'Avatar Updated Successfully.');
    }

    public function updatedPhoto()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        $this->validate([
            'photo' => 'image|max:10024',
        ]);
        Storage::disk('public')->delete(general('logo'));
        setting([
            'general_settings.logo' => null,
        ])->save();

        $photo = Image::make($this->photo)->encode('png', 75);
        $this->photo = $this->photo->hashname();
        Storage::disk('public')->put('logo/' . $this->photo, $photo);
        // dd($this->photo);

        setting([
            'general_settings.logo' => 'logo/' . $this->photo,
        ])->save();
        $this->deletePhoto = $this->photo;
        // $this->photo->store('public/profile-photos');
        $this->photo = null;
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
    'Avatar Updated Successfully.');
    }

    public function imagedelete()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        if ($this->deletePhoto) {
            Storage::disk('public')->delete(general('logo'));
            setting([
                'general_settings.logo' => null,
            ])->save();
            $this->deletePhoto = null;
            $this->userAvatar = null;
        } elseif ($this->photo) {
            $this->photo = null;
        }
        $this->dispatch('refreshData');
        $this->alertMessage('success', 'Operation success',
    'Avatar Updated Successfully.');
    }

    public function general()
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        setting([
            'general_settings.app_name' => $this->app_name,
            'general_settings.app_description' => $this->app_description,
            'general_settings.email' => $this->email,
            'general_settings.website' => $this->website,
            'general_settings.phone' => $this->phone,
            'general_settings.fax' => $this->fax,
            'general_settings.address' => $this->address,
            'general_settings.default_password' => $this->default_password,
            'general_settings.page_size' => $this->page_size,
            'general_settings.report_page_size' => $this->report_page_size,
            'general_settings.students_for_enroll_modal' => $this->students_for_enroll_modal,
            'general_settings.test_passing_marks' => $this->test_passing_marks,
            'general_settings.access_from' => $this->access_from,
            'general_settings.access_to' => $this->access_to,
            'general_settings.custom_date_format' => $this->custom_date_format,
            'general_settings.layout' => $this->layout,
            'general_settings.primary_color' => $this->color,
            'general_settings.language' => $this->language
        ])->save();
        // Artisan::call("env:set APP_NAME='$this->app_name'");
        // Artisan::call("env:set TIME_ZONE='$this->app_timezone'");
        $this->dispatch('reload');
        $this->alertMessage('success', 'Operation success',
    'General Settings Updated Successfully.');
    }

    public function mount()
    {

        // General Settings
        $this->app_name = general('app_name');
        $this->app_description = general('app_description');
        $this->email = general('email');
        $this->website = general('website');
        $this->phone = general('phone');
        $this->fax = general('fax');
        $this->address = general('address');
        $this->app_timezone = env('TIME_ZONE');
        $this->default_password = general('default_password');
        $this->page_size = general('page_size');
        $this->report_page_size = general('report_page_size');
        $this->students_for_enroll_modal = general('students_for_enroll_modal');
        $this->test_passing_marks = general('test_passing_marks');
        $this->access_from = general('access_from');
        $this->access_to = general('access_to');
        $this->custom_date_format = general('custom_date_format');
        $this->layout = general('layout');
        $this->color = general('primary_color');
        $this->language = general('language');
        if (general('logo')) {
            $this->userAvatar = env('APP_URL') . '/storage' . '/' . general('logo');
            $this->deletePhoto = general('logo');
        } else
            $this->userAvatar = null;

        if (general('logo_black')) {
            $this->blacklogo = env('APP_URL') . '/storage' . '/' . general('logo_black');
            $this->deletelogo = general('logo_black');
        } else
            $this->blacklogo = null;

        if (general('favicon')) {
            $this->favicon = env('APP_URL') . '/storage' . '/' . general('favicon');
            $this->deleteicon = general('favicon');
        } else
            $this->favicon = null;
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

    public function render()
    {
        $this->languages = UtilityFacades::languages();
        return view('livewire.admin.settings.general-settings');
    }
}
