<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->tipe == 'RW') {
            return $next($request);
        }

        if (Auth::user()->tipe == 'RT') {
            return redirect()->route('rt');
        }

        if (Auth::user()->tipe == 'Warga') {
            return redirect()->route('warga');
        }
    }
}
