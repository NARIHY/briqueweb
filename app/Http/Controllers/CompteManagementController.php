<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompteManagementRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompteManagementController extends Controller
{
    /**
     * List all of users
     * @return \Illuminate\View\View
     */
    public function listing(): View
    {
        $user = User::orderBy('id', 'desc')
                            ->paginate(10);
        return view($this->viewPath().'index', [
            'user' => $user
        ]);
    }

    /**
     * To edit an user role
     * @param string $userId
     * @return \Illuminate\View\View
     */
    public function edit(string $userId): View
    {
        $use = User::findOrFail($userId);
        $role = Role::pluck('id', 'title');
        return view($this->viewPath().'view.view', [
            'use' => $use,
            'role' => $role
        ]);
    }

    /**
     * Modify user information
     * @param \App\Http\Requests\CompteManagementRequest $request
     * @param string $userId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function modify(CompteManagementRequest $request, string $userId): RedirectResponse
    {
        $user = User::findOrFail($userId);
        $user->update($request->validated());
        return redirect()->route('Admin.CompteManagement.view', ['userId' => $userId])->with('success', 'Modification réussi');
    }
    /**
     * Return an instance of viewPath
     * @return string
     */
    private function viewPath():string
    {
        $view = "admin.compteManagement.";
        return $view;
    }
}
