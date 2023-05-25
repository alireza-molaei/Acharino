<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(6)->get();
return view('blogs/blogs',compact('blogs'));
   }
}
