<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(6);
return view('blogs/blogs',compact('blogs'));
   }
}
