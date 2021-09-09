<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/home');
})->name('home');



Route::get('/about-us', function () {
    return view('page.about');
})->name('about');