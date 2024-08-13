<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsVerified
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->is_verified) {
            if ($request->route()->named('custom.verification.notice') || 
                $request->route()->named('custom.verification.verify') || 
                $request->route()->named('register') ||
                $request->route()->named('register.store') || 
                $request->route()->named('logout') || // Allow logout route
                $request->route()->named('login') ||
                $request->route()->named('password.request') ||
                $request->route()->named('password.email') ||
                $request->route()->named('password.reset') ||
                $request->route()->named('password.update')) {
                return $next($request);
            }
            return redirect()->route('custom.verification.notice');
        }

        return $next($request);
    }
}
