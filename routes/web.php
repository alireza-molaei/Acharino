<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[App\Http\Controllers\IndexController::class,'index'])->name('index');
Route::get('services',[App\Http\Controllers\ServicesController::class,'index']);
Route::get('blogs',[App\Http\Controllers\BlogsController::class,'index']);
Route::get('about',[\App\Http\Controllers\AboutController::class,'index']);
Route::get('/contact/create',[App\Http\Controllers\ContactController::class,'create'])->name('contact.create');
Route::post('contact',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
