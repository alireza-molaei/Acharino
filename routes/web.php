<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('blogs', [App\Http\Controllers\BlogsController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('/contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('carservice', function () {
    return view('services.service-1');
})->name('service-1');
Route::get('abgarmservice', function () {
    return view('services.service-2');
})->name('service-2');
Route::get('microservice', function () {
    return view('services.service-3');
})->name('service-3');
Route::get('packservice', function () {
    return view('services.service-4');
})->name('service-4');
Route::get('mathinservice', function () {
    return view('services.service-5');
})->name('service-5');
Route::get('gazservice', function () {
    return view('services.service-6');
})->name('service-6');
