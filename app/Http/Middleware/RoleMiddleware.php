<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to the login page
        }

        // Check if the user has the specified role
        if (!Auth::user()->hasRole($role)) {
            return abort(403); // Forbidden (or you can redirect to an error page)
        }

        return $next($request);
    }
}
