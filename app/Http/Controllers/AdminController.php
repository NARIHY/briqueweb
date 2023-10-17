<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    // Global Administration controller
    /**
     * To go to the admin home
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('admin.index');
    }

    public function contact(): View
    {
        $contact = Contact::orderBy('created_at', 'desc')
                                    ->paginate(15);
        return view('admin.contact.index', [
            'contact' => $contact
        ]);
    }
}
