<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdminAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        if (Auth::guard("web")->check()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
