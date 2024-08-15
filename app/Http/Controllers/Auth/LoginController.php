<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Cache\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    protected $rateLimiter;
    protected $maxAttempts = 5;
    protected $decayMinutes = 1;

    public function __construct(RateLimiter $rateLimiter)
    {
        $this->rateLimiter = $rateLimiter;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $request->only('email_or_phone', 'password');

        if (filter_var($credentials['email_or_phone'], FILTER_VALIDATE_EMAIL)) {
            $login_type = 'email';
        } else {
            $login_type = 'phone';
        }

        if (Auth::attempt([$login_type => $credentials['email_or_phone'], 'password' => $credentials['password']], $request->filled('remember'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);

            if (Auth::user()->is_verified) {
                return redirect()->route('home-page');
            } else {
                Auth::logout();
                return redirect()->route('custom.verification.notice');
            }
        }

        $this->incrementLoginAttempts($request);

        return back()->withErrors([
            'email_or_phone' => trans('auth.failed'),
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email_or_phone' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function hasTooManyLoginAttempts(Request $request)
    {
        return $this->rateLimiter->tooManyAttempts(
            $this->throttleKey($request), $this->maxAttempts
        );
    }

    protected function incrementLoginAttempts(Request $request)
    {
        $this->rateLimiter->hit(
            $this->throttleKey($request)
        );
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->rateLimiter->availableIn(
            $this->throttleKey($request)
        );

        throw ValidationException::withMessages([
            'email_or_phone' => [trans('auth.throttle', ['seconds' => $seconds])],
        ])->status(429);
    }

    protected function throttleKey(Request $request)
    {
        return strtolower($request->input('email_or_phone')).'|'.$request->ip();
    }

    protected function clearLoginAttempts(Request $request)
    {
        $this->rateLimiter->clear(
            $this->throttleKey($request)
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home-page');
    }
}