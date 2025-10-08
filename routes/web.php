<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/team', 'pages.team');
Route::view('/contact', 'pages.contact');

Route::get('/program/{id?}', function ($id = null) {
    return view('pages.program', ['id' => $id]);
});

Route::redirect('/home', '/');

Route::fallback(function () {
    return view('pages.404');
});
