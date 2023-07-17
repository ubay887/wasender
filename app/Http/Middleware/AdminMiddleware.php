<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'admin' && Auth::user()->status == 1) {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->status != 1) {
            Auth::logout();
            Session::flush('auth-error', __('Your Account Is Deactivated'));
        }

        return redirect('/login');
    }
}
