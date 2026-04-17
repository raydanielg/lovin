<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckProfileComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user) {
            // Skip for AJAX/API requests
            if ($request->ajax() || $request->wantsJson() || $request->is('districts/*')) {
                return $next($request);
            }

            // Auto-create profile if missing
            if (!$user->profile) {
                $user->profile()->create();
            }

            // Redirect to setup if profile not complete
            if (!$user->profile->is_complete && !$request->is('profile/setup*')) {
                return redirect()->route('profile.setup');
            }
        }

        return $next($request);
    }
}
