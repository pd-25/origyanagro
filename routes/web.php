<?php

use App\Http\Controllers\frontend\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes();
Route::get('/', [IndexController::class, 'index']);


Route::get('/about-us', [IndexController::class, 'aboutUs']);
Route::get('/certificate', [IndexController::class, 'certificate']);
Route::get('/contact-us', [IndexController::class, 'contactus']);
Route::get('/account', [IndexController::class, 'contactus']);


Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

// Route::get('/login', function () {
//     return view('frontend.login');
// });

Route::get('/privacy-policy', function () {
    return view('frontend.privacypolicy');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/recover-password', function () {
    return view('frontend.recoverpassword');
});



Route::get('/single-product', function () {
    return view('frontend.singleproduct');
});

Route::get('/terms-conditions', function () {
    return view('frontend.termsconditions');
});

require __DIR__ . '/admin.php';