<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OauthCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if user are connected
        if (Auth::check()) {
            if (auth()->user()->info === 1) {
                // Redirigez l'utilisateur vers une page spécifique (par exemple, 'verification')
                return redirect()->route('Admin.index');
            }
        }

        return $next($request);
    }
}
