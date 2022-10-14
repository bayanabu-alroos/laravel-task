<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('service', function () {
    return view('service');
});

Route::get('product', function () {
    return view('product');
});

Route::get('team', function () {
    return view('team');
});



Route::get('testimonial', function () {
    return view('testimonial');
});


Route::get('/contact', [ContactUsFormController::class, 'createForm']);
// Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');



