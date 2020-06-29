<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check()) {
            switch (Auth::user()->tipe) {
                case 'RW':
                    return redirect()->route('rw.');
                    break;
                case 'RT':
                    return redirect()->route('rt.');
                    break;
                case 'Warga':
                    return redirect()->route('warga.');
                    break;
                default:
                    return redirect()->route('login');
                    break;
            }
        }

        return $next($request);
    }
}
