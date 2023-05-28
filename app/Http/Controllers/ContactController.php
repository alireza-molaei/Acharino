<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact');
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create($request ->all());
        return redirect()->route('contact.create')->with('alert','عملیات شما موفقیت آمیز بود');
    }
}
