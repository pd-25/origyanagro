<?php

use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/about-us', [IndexController::class, 'aboutUs'])->name("aboutUs");
Route::get('/certificate', [IndexController::class, 'certificate']);
Route::get('/contact-us', [IndexController::class, 'contactus']);
Route::get('/single-product/{slug}', [ProductController::class, 'singleProduct'])->name("singleProduct");
Route::group(['middleware' => 'usercheck'], function () {
    Route::get('/account', [IndexController::class, 'account'])->name(name: 'account');
    Route::post('/add-to-cart', [OrderController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/update-cart', [OrderController::class, 'updateCart'])->name('cart.update');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('placeOrder');
    Route::post('razorpay-payment', [OrderController::class, 'payPlaceOrder'])->name('razorpay.payment.store');

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


Route::get('/terms-conditions', function () {
    return view('frontend.termsconditions');
});

require __DIR__ . '/admin.php';
