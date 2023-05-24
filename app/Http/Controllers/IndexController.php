<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\faq;
use App\Models\service;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::all()->random(6);
        $faqs = faq::all()->random(3);
        $blogs = Blog::latest()->take(3)->get();
        return view('index', compact('services', 'faqs', 'blogs'));
    }
}
