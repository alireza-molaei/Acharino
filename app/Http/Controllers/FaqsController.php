<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqsRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faq::all()->take(3);
        return view('faqs.faq', compact('faqs'));
    }

    public function store(StoreFaqsRequest $request)
    {
        Faq::create($request->all());
        return redirect()->route('faqs.show')->with('alert', __('messages.success'));
    }

    public function create()
    {
        return view('admin.faq.faqs-create');
    }

    public function show()
    {
        $faqs = Faq::paginate(8);
        return view('admin.faq.faqs-show', compact('faqs'));

    }

    public function edit(Faq $faq)
    {
        return view('admin.faq.form-faq-edit', compact('faq'));
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->all());
        return redirect()->route('faqs.show')->with('alert', __('messages.faq_edited'));
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->back();
    }
}
