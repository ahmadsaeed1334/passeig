<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
// use Laravolt\Avatar\Avatar;
use League\ISO3166\ISO3166;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Artisan;
use Laravolt\Avatar\Avatar;
use Spatie\Activitylog\ActivityLogger;
use Symfony\Component\HttpFoundation\Response;



if (!function_exists('access')) {
    function access($value)
    {
        return abort_if(Gate::denies($value), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }
}

if (!function_exists('default_lang')) {
    function default_lang()
    {
        return  setting('general_settings.language');
    }
}

if (!function_exists('general')) {
    function general($value)
    {
        return  setting('general_settings.' . $value);
    }
}

if (!function_exists('alert')) {
    function alert($value)
    {
        return  setting('alert.' . $value);
    }
}

if (!function_exists('primary_color')) {
    function primary_color()
    {
        return  setting('general_settings.primary_color');
    }
}

// if (!function_exists('user_avatar')) {
//     function user_avatar($user)
//     {
//         return  $user->profile_photo_path ? $user->profile_photo_url : Avatar::create($user->name)->toBase64();
//     }
// }
if (!function_exists('user_avatar')) {
    function user_avatar($user)
    {
        if ($user->profile_photo_path) {
            return $user->profile_photo_url;
        } else {
            $avatar = new Avatar(); // Create an instance of the Avatar class
            return $avatar->create($user->name)->toBase64();
        }
    }
}
if (!function_exists('getLanguageFlag')) {
    function getLanguageFlag($code)
    {

        return asset('vendor/blade-flags/language-' . $code . '.svg');
    }
}

if (!function_exists('getLanguageName')) {
    function getLanguageName($code)
    {
        $languageName = \Locale::getDisplayLanguage($code);
        return $languageName ?: '';
    }
}

if (!function_exists('random_password')) {
    function random_password($length = 12)
    {
        $length = $length >= 12 ?  mt_rand(15, 25) : $length;
        $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $specialCharacters = '!@#$%^&*()-_=+{}[];:<>,.?';

        $password = '';

        // Ensure at least one uppercase letter
        $password .= $uppercaseLetters[rand(0, strlen($uppercaseLetters) - 1)];

        // Ensure at least one lowercase letter
        $password .= $lowercaseLetters[rand(0, strlen($lowercaseLetters) - 1)];

        // Ensure at least one digit
        $password .= $numbers[rand(0, strlen($numbers) - 1)];

        // Ensure at least one special character
        $password .= $specialCharacters[rand(0, strlen($specialCharacters) - 1)];

        // Generate the remaining characters
        $remainingLength = $length - 4;
        for ($i = 0; $i < $remainingLength; $i++) {
            $characters = $uppercaseLetters . $lowercaseLetters . $numbers . $specialCharacters;
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        // Shuffle the password characters randomly
        $password = str_shuffle($password);

        return $password;
    }
}

if (!function_exists('user')) {
    function user($column, $value)
    {
        return User::where($column, $value)->first();
    }
}

if (!function_exists('confirm')) {
    function confirm()
    {
        return  "onclick = \"confirm('Are you sure? (Action is not reversible)') || event.stopImmediatePropagation()\"";
    }
}

if (!function_exists('no_data')) {
    function no_data()
    {
        $photo =  asset('assets/media/illustrations/sigma-1/9.png');
        return "<tr>
                    <td colspan=\"6\">
                         <div class=\"d-flex flex-row-fluid flex-center\">
                            <img class=\"translate-horizontal\" src=\"$photo\"
                                alt=\"No Data Found\" style=\"max-height: 99%; max-width: 99%; object-fit: contain\">
                        </div>
                    </td>
                </tr>";
    }
}

if (!function_exists('custom_date_format')) {
    function custom_date_format($date = '')
    {
        return date(setting('general_settings.custom_date_format'), strtotime($date));
    }
}

if (!function_exists('custom_datetime_format')) {
    function custom_datetime_format($date = '')
    {
        return date(setting('general_settings.custom_date_format') . ', h:i:s A', strtotime($date));
    }
}

if (!function_exists('route_name')) {
    function route_name()
    {
        return Route::currentRouteName();
    }
}

if (!function_exists('diff_for_humans_long')) {
    function diff_for_humans_long($date)
    {
        return Carbon::parse($date)->diffForHumans([
            'parts' => 7,
            'short' => true,
            'absolute' => true
            // 'join' => true, // join with natural syntax as per current locale
        ]);
    }
}

if (!function_exists('diff_for_humans')) {
    function diff_for_humans($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }
}

if (!function_exists('parse_date')) {
    function parse_date($date)
    {
        return Carbon::parse($date);
    }
}

if (!function_exists('name_avatar')) {
    function name_avatar($name)
    {
        $avatar = new Avatar(); // Instantiate an object of the Avatar class
        return $avatar->create($name)->toBase64();
    }
}

if (!function_exists('quick_actions')) {
    function quick_actions()
    {
        return "Please Use Below buttons if dropdown not work!";
    }
}

if (!function_exists('nothing_happen')) {
    function nothing_happen()
    {
        return "Nothing will happen to click here!";
    }
}

if (!function_exists('backup_clean')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function backup_clean()
    {
        Artisan::call('backup:clean');
    }
}

if (!function_exists('backup_run')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function backup_run()
    {
        Artisan::call('backup:run');
    }
}

if (!function_exists('custom_command')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function custom_command($value)
    {
        try {
            Artisan::call($value);
            return true;
        } catch (Exception $e) {
            // dd($e->message);
            return false;
        }
    }
}

if (!function_exists('config_cache')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function config_cache()
    {
        Artisan::call('config:cache');
    }
}

if (!function_exists('config_clear')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function config_clear()
    {
        Artisan::call('config:clear');
    }
}

if (!function_exists('clear_caches')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function clear_caches()
    {
        Artisan::call('cache:clear');
    }
}

if (!function_exists('clear_views')) {
    /**
     * @version 1.0.0
     * @since 1.0
     */
    function clear_views()
    {
        Artisan::call('view:clear');
    }
}

if (!function_exists('random_color')) {


    function random_color($sufix = '')
    {
        $colors = [
            'success',
            'dark',
            'info',
            'warning',
            'danger',
            'primary',
            // 'between-night-day',
            // 'midnight',
            // 'html',
            // 'peel',
            // 'wiretap',
            // 'orange',
            // 'design',
            // 'flare',
            // 'witching-hour',
            // 'yoda',
            // 'cool-sky',
            // 'moonlit',
            // 'cool-blues',
            // 'grad-gray'
            // 'primary', 'secondary', 'gray', 'success', 'danger',  'warning',  'info',
            // 'blue', 'azure', 'indigo', 'purple', 'pink', 'orange', 'teal'
        ];
        $key = array_rand($colors, 1);
        $color = $colors[$key];
        return ($sufix) ? $color . '-' . $sufix : $color;
    }
}

if (!function_exists('hide_email')) {

    /**
     * @param $email
     * @version 1.0
     * @since 1.1.2
     * @return string
     */
    function hide_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && setting('general_settings.hide_email')) {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 2), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
            $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
            return $hideEmailAddress;
        }
        return $email;
    }
}

if (!function_exists('hide_phone')) {

    /**
     * @param $phone
     * @version 1.0
     * @since 1.1.2
     * @return string
     */
    function hide_phone($phone)
    {
        $number = $phone;
        $middle_string = "";
        $length = strlen($number);
        if (setting('general_settings.hide_phone')) {
            if (
                $length < 3
            ) {

                echo $length == 1 ? "*" : "*" . substr($number,  -1);
            } else {
                $part_size = floor($length / 3);
                $middle_part_size = $length - ($part_size * 2);
                for ($i = 0; $i < $middle_part_size; $i++) {
                    $middle_string .= "*";
                }

                echo  substr($number, 0, $part_size) . $middle_string  . substr($number,  -$part_size);
            }
        } else {
            return $number;
        }
    }
}

if (!function_exists('replace_shortcut')) {
    /**
     * @param $content|string
     * @version 1.0
     * @since 1.1.2
     * @return string
     */
    function replace_shortcut($content)
    {
        $shortcuts = [
            '[[privacy]]' => 'policy',
            '[[terms]]' => 'terms',
        ];
        $content = strtr($content, $shortcuts);

        return $content;
    }
}

if (!function_exists('user_type')) {

    /**
     * @param $userId
     * @return modal
     * @version 1.0.0
     * @since 1.0
     */
    function user_type($type)
    {
        if ($type == -1) {
            return "Super Admin";
        } elseif ($type == 0) {
            return "Admin";
        } elseif ($type == 1) {
            return "Vendor";
        } elseif ($type == 2) {
            return "Customer";
        }
    }
}

if (!function_exists('get_user')) {

    /**
     * @param $userId
     * @return modal
     * @version 1.0.0
     * @since 1.0
     */
    function get_user($userId)
    {
        $user = User::where('id', $userId)->first();

        return (!blank($user)) ? $user : false;
    }
}

if (!function_exists('html_string')) {
    /**
     * @param $text
     * @return mixed
     * @version 1.0.0
     * @since 1.0
     */
    function html_string($text)
    {
        return new HtmlString($text);
    }
}

if (!function_exists('activity_log')) {
    /**
     * saves activity log
     * @param $message
     * @version 1.0.0
     * @since 1.0
     */
    function activity_log($message = null)
    {
        app(ActivityLogger::class)->saveActivityLog($message);
    }
}

if (!function_exists('get_rand')) {
    /**
     * @param $len
     * @version 1.0.0
     * @since 1.0
     */
    function get_rand($len = 12, $uc = true)
    {
        $rand = Str::random($len);
        return ($uc) ? strtoupper($rand) : $rand;
    }
}

if (!function_exists('has_route')) {
    /**
     * check if route exist
     * @param $name
     * @version 1.0.0
     * @since 1.0
     */
    function has_route($name)
    {
        return Route::has($name);
    }
}

if (!function_exists('is_route')) {
    /**
     * check current route
     * @param $name
     * @version 1.0.0
     * @since 1.0
     */
    function is_route($name)
    {
        return request()->routeIs($name);
    }
}

if (!function_exists('show_email')) {

    function show_email($email)
    {
        return (setting('general_settings.hide_email')) ? hide_email($email) :  $email;
    }
}

if (!function_exists('show_phone')) {

    function show_phone($phone)
    {
        return (setting('general_settings.hide_phone')) ? hide_phone($phone) :  $phone;
    }
}

if (!function_exists('show_phone')) {

    function show_phone($phone)
    {
        return (setting('general_settings.hide_phone')) ? hide_phone($phone) :  $phone;
    }
}

if (!function_exists('show_toltip')) {

    function show_toltip($message)
    {
        // data - container = body data-content
        return "data-bs-toggle=tooltip data-bs-placement=top title=\"$message\"";
    }
}

if (!function_exists('img_alt')) {

    function img_alt()
    {
        // data - container = body data-content
        $dp = name_avatar('DP');
        return "onerror=this.src='$dp'";
    }
}

if (!function_exists('tomorrow')) {

    function tomorrow($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addDay()));
    }
}

if (!function_exists('yesterday')) {

    function yesterday($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subDay()));
    }
}

if (!function_exists('nextStartOfWeek')) {

    function nextStartOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addWeek()->startOfWeek()));
    }
}

if (!function_exists('nextEndOfWeek')) {

    function nextEndOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addWeek()->endOfWeek()));
    }
}

if (!function_exists('thisStartOfWeek')) {

    function thisStartOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->startOfWeek()));
    }
}

if (!function_exists('thisEndOfWeek')) {

    function thisEndOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->endOfWeek()));
    }
}

if (!function_exists('lastStartOfWeek')) {

    function lastStartOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subWeek()->startOfWeek()));
    }
}

if (!function_exists('lastEndOfWeek')) {

    function lastEndOfWeek($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subWeek()->endOfWeek()));
    }
}

if (!function_exists('nextStartOfMonth')) {

    function nextStartOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addMonth()->startOfMonth()));
    }
}

if (!function_exists('nextEndOfMonth')) {

    function nextEndOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addMonth()->endOfMonth()));
    }
}

if (!function_exists('thisStartOfMonth')) {

    function thisStartOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->startOfMonth()));
    }
}

if (!function_exists('thisEndOfMonth')) {

    function thisEndOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->endOfMonth()));
    }
}

if (!function_exists('lastStartOfMonth')) {

    function lastStartOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subMonth()->startOfMonth()));
    }
}

if (!function_exists('lastEndOfMonth')) {

    function lastEndOfMonth($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subMonth()->endOfMonth()));
    }
}

if (!function_exists('nextStartOfQuarter')) {

    function nextStartOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addQuarter()->startOfQuarter()));
    }
}

if (!function_exists('nextEndOfQuarter')) {

    function nextEndOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addQuarter()->endOfQuarter()));
    }
}

if (!function_exists('thisStartOfQuarter')) {

    function thisStartOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->startOfQuarter()));
    }
}

if (!function_exists('thisEndOfQuarter')) {

    function thisEndOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->endOfQuarter()));
    }
}

if (!function_exists('lastStartOfQuarter')) {

    function lastStartOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subQuarter()->startOfQuarter()));
    }
}

if (!function_exists('lastEndOfQuarter')) {

    function lastEndOfQuarter($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subQuarter()->endOfQuarter()));
    }
}

if (!function_exists('nextStartOfYear')) {

    function nextStartOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addYear()->startOfYear()));
    }
}

if (!function_exists('nextEndOfYear')) {

    function nextEndOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->addYear()->endOfYear()));
    }
}

if (!function_exists('thisStartOfYear')) {

    function thisStartOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->startOfYear()));
    }
}

if (!function_exists('thisEndOfYear')) {

    function thisEndOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->endOfYear()));
    }
}

if (!function_exists('lastStartOfYear')) {

    function lastStartOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subYear()->startOfYear()));
    }
}

if (!function_exists('lastEndOfYear')) {

    function lastEndOfYear($format = '')
    {
        if (empty($format)) {
            $format = setting('general_settings.custom_date_format');
        }
        // data - container = body data-content
        return date($format, strtotime(now()->subYear()->endOfYear()));
    }
}
