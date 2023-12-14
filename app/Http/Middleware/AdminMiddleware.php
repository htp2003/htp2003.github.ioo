<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirect or handle unauthorized access
        return redirect('/')->with('error', 'Unauthorized access');
    }
}
