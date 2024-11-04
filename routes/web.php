<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/about-us', function () {
    return view('frontend.aboutus');
});

Route::get('/certificate', function () {
    return view('frontend.certificate');
});


Route::get('/contact-us', function () {
    return view('frontend.contactus');
});


Route::get('/account', function () {
    return view('frontend.account');
});


Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/privacy-policy', function () {
    return view('frontend.privacypolicy');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/recover-password', function () {
    return view('frontend.recoverpassword');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/single-product', function () {
    return view('frontend.singleproduct');
});

Route::get('/terms-conditions', function () {
    return view('frontend.termsconditions');
});

require __DIR__ . '/admin.php';