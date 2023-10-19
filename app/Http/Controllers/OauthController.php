<?php

namespace App\Http\Controllers;

use App\Http\Requests\OauthRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OauthController extends Controller
{
    /**
     * View of verify Oauth security
     * @return \Illuminate\View\View
     */
    public function verify(): View
    {
        return view('admin.oauth.verify');
    }

    /**
     * To do when user post their token
     * @param \App\Http\Requests\OauthRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post(OauthRequest $request): RedirectResponse
    {
        //verify if the code are same to the code in the user
        $user = auth()->user();
        $code = $user->confirmation;
        $verify = hash('sha256', $request->validated('code'));
        //if it's not the same return with error
        if($code !== $verify) {
            return back()->with('error','Echec de la connexion');
        }
        //get the user id connected
        $id = $user->id;
        //Verify in the user Table
        $userTable = User::findOrFail($id);
        //Update userTable
        $userTable->update([
            'info' => 1
        ]);
        return redirect()->route('Admin.index');
    }
}
