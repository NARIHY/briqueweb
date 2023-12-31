<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $contact = Contact::create($data);
        return redirect()->route('Public.contact')->with('success', 'merci de nous avoir contacter.');
    }
}
