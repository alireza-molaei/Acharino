<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->route('contact.create')->with('alert', __('messages.success'));
    }

    public function show()
    {
        $contacts=Contact::paginate(8);
        return view('admin.contact.contact-show', compact('contacts'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }

}
