<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ProfileController;
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
Route::get('blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs');
Route::get('about', [AboutController::class, 'index']);
Route::get('contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
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
Route::get('about', function () {
    return view('about.about');
})->name('about');
Route::get('admin/panel', function () {
    return view('admin.index');

})->middleware(['auth', 'verified'])->name('admin');
Route::get('dashboard',function (){
   return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs.index');
Route::get('/faqs/create', [FaqsController::class, 'create'])->middleware(['auth', 'verified'])->name('faqs.create');
Route::post('/faqs', [FaqsController::class, 'store'])->middleware(['auth', 'verified'])->name('faqs.store');
Route::get('faqs/show', [FaqsController::class, 'show'])->middleware(['auth', 'verified'])->name('faqs.show');
Route::get('/faqs/{faq}/edit', [FaqsController::class, 'edit'])->middleware(['auth', 'verified'])->name('faqs.edit');
Route::post('/faqs/{faq}/update', [FaqsController::class, 'update'])->middleware(['auth', 'verified'])->name('faqs.update');
Route::delete('/faqs/{faq}/delete', [FaqsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('faqs.destroy');
Route::get('/services/show',[\App\Http\Controllers\ServicesController::class,'show'])->middleware(['auth', 'verified'])->name('services.show');
Route::get('/services/{service}/edit',[\App\Http\Controllers\ServicesController::class,'edit'])->middleware(['auth', 'verified'])->name('services.edit');
Route::post('/services/{service}/update',[\App\Http\Controllers\ServicesController::class,'update'])->middleware(['auth', 'verified'])->name('services.update');
Route::get('/contacts/show', [ContactController::class, 'show'])->middleware(['auth', 'verified'])->name('contact.show');
Route::delete('/contacts/{contact}/delete', [ContactController::class, 'destroy'])->middleware(['auth', 'verified'])->name('contacts.destroy');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
