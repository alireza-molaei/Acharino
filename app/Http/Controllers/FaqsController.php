<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = faq::all()->take(3);
        return view('faqs.faq',compact('faqs'));
   }
}
