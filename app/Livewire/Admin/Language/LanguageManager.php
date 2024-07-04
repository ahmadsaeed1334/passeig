<?php

namespace App\Livewire\Admin\Language;
use App\Models\User;
use App\Facades\UtilityFacades;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('layouts.app')]
class LanguageManager extends Component
{
    
    use LivewireAlert;

    public $page_title = "Languages";
    public $langCode, $tab = 'labels';
    protected $languages, $arrLabel = [], $currantLang, $arrMessage = [];
    public $translations = [];

    protected $listeners = ['reload' => '$refresh'];

    public function resetAll()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function addKeys($lang)
    {
        $this->langCode = $lang;
        $this->addTranslation();
        $this->dispatch('openModal', ['modalId' => "addKeysModal"]);
    }

    public function addTranslation()
    {
        $this->translations[] = [
            'key' => '',
            'value' => ''
        ];
        $this->dispatch('keysTop');
    }

    public function resetTranslations()
    {
        $this->translations = [];
    }

    public function removeTranslation($index)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        unset($this->translations[$index]);
        $this->translations = array_values($this->translations);
    }

    public function store($lang)
    {
        access('super language create');
        $filePath = base_path() . '/resources/lang/' . $lang . '.json';

        // Read existing file contents
        $existingContents = file_get_contents($filePath);

        // Decode existing JSON contents
        $existingTranslations = json_decode($existingContents, true);

        // Append new translation directly to existing translations
        foreach ($this->translations as $translation) {
            $existingTranslations[strtolower($translation['key'])] = $translation['value'];
        }

        // Encode updated translations to JSON
        $jsonData = json_encode($existingTranslations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Write the updated JSON data to the file
        file_put_contents($filePath, $jsonData);

        $this->resetTranslations();
        $this->dispatch('closeModal', ['modalId' => "addKeysModal"]);
        $this->alertMessage();
        $this->resetAll();
    }

    public function deleteTrans($lang, $key)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        access('super language delete');
        $filePath =  base_path() . '/resources/lang/' . $lang . '.json';

        // Read existing file contents
        $existingContents = file_get_contents($filePath);

        // Decode existing JSON contents
        $existingTranslations = json_decode($existingContents, true);

        // Remove the desired key from existing translations
        unset($existingTranslations[$key]);

        // Encode updated translations to JSON
        $jsonData = json_encode($existingTranslations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Write the updated JSON data to the file
        file_put_contents($filePath, $jsonData);
        $this->manageLanguage($lang);
        $this->alertMessage();
    }

    public function updatingTab()
    {
        // if ($this->tab == 'labels') {
        // } elseif ($this->tab == 'messages') {
        // }
        $this->manageLanguage($this->langCode);
    }

    public function manageLanguage($currantLang)
    {
        $this->languages = UtilityFacades::languages();

        $dir = base_path() . '/resources/lang/' . $currantLang;
        if (!is_dir($dir)) {
            $dir = base_path() . '/resources/lang/en';
        }
        $this->arrLabel   = json_decode(file_get_contents($dir . '.json'));
        $arrFiles   = array_diff(
            scandir($dir),
            array(
                '..',
                '.',
            )
        );
        $this->langCode = $this->currantLang = $currantLang;

        foreach ($arrFiles as $file) {
            $fileName = basename($file, ".php");
            $fileData = $myArray = include $dir . "/" . $file;
            if (is_array($fileData)) {
                $this->arrMessage[$fileName] = $fileData;
            }
        }
        $this->dispatch('openModal', ['modalId' => "editLanguageModal"]);
    }

    public function storeLanguage()
    {
        access('super language create');
        $this->validate(
            [
                'langCode' => 'required',
            ],
            [
                'langCode.required' => 'The :attribute cannot be empty.',
            ],
            [
                'langCode' => 'Language Code',
            ]
        );
        $Filesystem = new Filesystem();
        $langCode   = strtolower($this->langCode);
        $langDir    = base_path() . '/resources/lang/';
        $dir        = $langDir;
        if (!is_dir($dir)) {
            mkdir($dir);
            chmod($dir, 0777);
        }

        $dir      = $dir . '' . $langCode;

        $jsonFile = $dir . ".json";
        File::copy($langDir . 'en.json', $jsonFile);

        if (!is_dir($dir)) {
            mkdir($dir);
            chmod($dir, 0777);
        }
        $Filesystem->copyDirectory($langDir . "en", $dir . "/");
        $this->dispatch('closeModal', ['modalId' => "addLanguageModal"]);
        $this->alertMessage();
        $this->resetAll();
    }

    public function destroyLang($lang)
    {
        if (env('APP_ENV') == 'demo') {
            return $this->alertMessage('error', 'Operation failed', 'some operations are Not allowed in demo mode');
        }
        access('super language delete');
        $default_lang = env('default_language') ?? 'en';
        $langDir      = base_path() . '/resources/lang/';
        if (is_dir($langDir)) {
            UtilityFacades::delete_directory($langDir . $lang);
            unlink($langDir . $lang . '.json');
            // User::where('lang', 'LIKE', $lang)->update(['lang' => $default_lang]);
        }
        $this->alertMessage();
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
        // access('super languages');
        // app()->setLocale('ar');
        $this->languages = UtilityFacades::languages();
        // dd($languages);
        return view('livewire.admin.language.language-manager', [
            'languages' => $this->languages,
            'arrLabel' => $this->arrLabel,
            'currantLang' => $this->currantLang,
            'arrMessage' => $this->arrMessage,
        ]);
    }
}
