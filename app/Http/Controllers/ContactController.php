<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.create')->with('alert', __('messages.success'));
    }

    public function create()
    {
        return view('contact.contact');
    }
}
