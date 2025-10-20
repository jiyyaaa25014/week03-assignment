<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Halaman utama dan informasi Jeeycookie
*/

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Halaman Pembayaran
|--------------------------------------------------------------------------
| Menampilkan metode pembayaran Bank Jago & QRIS
*/
Route::view('/payment', 'pages.payment')->name('payment');

/*
|--------------------------------------------------------------------------
| Program & Halaman Dinamis
|--------------------------------------------------------------------------
*/
Route::get('/program/{id?}', function ($id = null) {
    return view('pages.program', ['id' => $id]);
})->name('program');

/*
|--------------------------------------------------------------------------
| Redirect dan Fallback
|--------------------------------------------------------------------------
*/
Route::redirect('/home', '/');

Route::fallback(function () {
    return view('pages.404');
});

/*
|--------------------------------------------------------------------------
| Form Contact (POST)
|--------------------------------------------------------------------------
*/
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
