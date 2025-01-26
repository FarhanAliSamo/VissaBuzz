<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotCompany
{
    public function handle(Request $request, Closure $next, $guard = 'company')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('company.login');
        }

        return $next($request);
    }
}
