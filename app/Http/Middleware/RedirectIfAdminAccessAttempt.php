<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminAccessAttempt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return response()->view('livewire.front-end.pages.page404', [], 404);
        }

        // Check if user is admin or super admin
        if (Auth::user()->user_type != 0 && Auth::user()->user_type != -1) {
            // return redirect('/404');
            return response()->view('livewire.front-end.pages.page404', [], 404);

        }

        return $next($request);
    }
}
