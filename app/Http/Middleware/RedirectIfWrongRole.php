<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfWrongRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $user = auth()->user();

        if (!$user) {
            return $next($request);
        }

        $currentPath = $request->path();

        // Check if user is on a manager page but not a manager
        if (str_starts_with($currentPath, 'manager/')) {
            if (!$user->isManager()) {
                // Redirect to appropriate dashboard
                if ($user->isAdmin() || $user->isSuperAdmin()) {
                    return redirect('/admin/dashboard');
                }
                return redirect('/home');
            }
        }

        // Check if user is on admin page but not admin/superadmin
        if (str_starts_with($currentPath, 'admin/')) {
            if (!$user->isAdmin() && !$user->isSuperAdmin()) {
                if ($user->isManager()) {
                    return redirect('/manager/dashboard');
                }
                return redirect('/home');
            }
        }

        // If user is on home but has a specific role dashboard, redirect them
        if ($currentPath === 'home' || $currentPath === '/') {
            if ($user->isManager()) {
                return redirect('/manager/dashboard');
            }
            if ($user->isAdmin() || $user->isSuperAdmin()) {
                return redirect('/admin/dashboard');
            }
        }

        return $next($request);
    }
}
