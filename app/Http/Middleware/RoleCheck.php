<?php

// app/Http/Middleware/RoleCheck.php
// app/Http/Middleware/RoleCheck.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     * @param ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check() && in_array(Auth::user()->role, $roles)) {
            return $next($request);
        }

        Auth::logout();
        return redirect()->route('login')->with('status', 'You are not authorized to access this page.');
    }
}
