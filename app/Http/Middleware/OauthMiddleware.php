<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OauthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifiez si l'utilisateur est connecté
        if (Auth::check()) {
            if (auth()->user()->info === 0 || auth()->user()->info === false) {
                // Redirigez l'utilisateur vers une page spécifique (par exemple, 'verification')
                return redirect()->route('Oauth.verify');
            }
        }
        return $next($request);
    }
}
