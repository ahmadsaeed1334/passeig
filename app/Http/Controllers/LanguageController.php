<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Filesystem\Filesystem;

class LanguageController extends Controller
{
    public function storeLanguageData(Request $request, $currantLang)
    {
        // dd($request->input('label'));
        $Filesystem = new Filesystem();
        $dir        = base_path() . '/resources/lang/';
        if (!is_dir($dir)) {
            // dd($dir);

            mkdir($dir);
            chmod($dir, 0777);
        }
        $jsonFile = $dir . "/" . $currantLang . ".json";

        if (isset($request->label) && !empty($request->label)) {
            file_put_contents($jsonFile, json_encode($request->label));
        }

        $langFolder = $dir . "/" . $currantLang;

        if (!is_dir($langFolder)) {
            mkdir($langFolder);
            chmod($langFolder, 0777);
        }
        if (isset($request->message) && !empty($request->message)) {
            foreach ($request->message as $fileName => $fileData) {
                $content = "<?php return [";
                $content .= $this->buildArray($fileData);
                $content .= "];";
                file_put_contents($langFolder . "/" . $fileName . '.php', $content);
            }
        }
        return redirect()->back();
    }

    public function buildArray($fileData)
    {
        $content = "";
        foreach ($fileData as $lable => $data) {
            if (is_array($data)) {
                $content .= "'$lable'=>[" . $this->buildArray($data) . "],";
            } else {
                $content .= "'$lable'=>'" . addslashes($data) . "',";
            }
        }

        return $content;
    }
}
