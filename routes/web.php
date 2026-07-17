<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // <-- Ye line sabse upar zaroor honi chahiye

Route::get('/', function () { return view('index'); });
Route::get('/index', function () { return view('index'); });
Route::get('/about', function () { return view('about'); });
Route::get('/services', function () { return view('services'); });
Route::get('/skills', function () { return view('skills'); });
Route::get('/portfolio', function () { return view('portfolio'); });
Route::get('/contact', function () { return view('contact'); });

// Is route ko humne controller ke 'store' function aur blade ke 'contact.submit' name se match kar diya
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/run-migration', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return "Migration Done Successfully!";
});