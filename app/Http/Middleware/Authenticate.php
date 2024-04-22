<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('AuthorizationMultipleGuards.login')->with('error', 'Please login to access this page.');
        }

        // If authenticated, proceed with the request
        return $next($request);
    }
}
