<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = service::all()->take(6);
        return view('services/services',compact('services'));
   }
}
