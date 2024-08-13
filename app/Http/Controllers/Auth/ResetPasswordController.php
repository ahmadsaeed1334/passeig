<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = 'home';

    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);
        $user->is_verified = true;
        $user->verification_code = null;
        $user->save();

        $this->guard()->login($user);
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return redirect($this->redirectPath())->with('status', trans($response));
    }
}
