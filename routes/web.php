<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page/home');
});



Route::get('/about-us', function () {
    return view('page.about');
});