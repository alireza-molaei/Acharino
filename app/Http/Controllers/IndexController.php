<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Faq;
use App\Models\service;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::all()->take(6);
        $faqs = Faq::all()->take(3);
        $blogs = Blog::latest()->take(3)->get();
        return view('index', compact('services', 'faqs', 'blogs'));
    }
}
