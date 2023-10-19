<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Notifications\OauthNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        //if success create the notification
        $user = auth::user();
        //create a randdom security code
        $longueur = 13; // Définissez la longueur de la chaîne aléatoire selon vos besoins
        $jeton = Str::random($longueur);
        //send the randdom security to the user
        Notification::send($user, new OauthNotification($jeton));
        //hash
        $verify = hash('sha256', $jeton);
        //insert the random security into the user table
        $userTable = User::findOrFail($user->id);
        $userTable->update([
            'confirmation' => $verify
        ]);
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //get the user connected
        $user = auth()->user();
        $userTable = User::findOrFail($user->id);
        //return null the user token
        if($user->info != 0) {
            $userTable->update([
                'info' => 0
            ]);
        }
        //log out the user
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
