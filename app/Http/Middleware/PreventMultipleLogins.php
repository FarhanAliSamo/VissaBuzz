<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventMultipleLogins
{
    public function handle(Request $request, Closure $next)
    {

        if(Auth::guard('web')->check()){
            return redirect()->route('admin.dashboard')->with('error', 'You are already logged in.');
        }
        if(Auth::guard('company')->check()){
            return redirect()->route('company.dashboard')->with('error', 'You are already logged in.');
        }

        return $next($request);
    }
}
