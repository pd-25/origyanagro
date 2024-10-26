<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/about-us', function () {
    return view('frontend.aboutus');
});
