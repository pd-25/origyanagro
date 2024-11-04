<?php

use App\Http\Controllers\admin\auth\AuthController;
use App\Http\Controllers\admin\blog\BlogController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\casestudy\CaseStudyController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\dashboard\DashboardController;
use App\Http\Controllers\admin\news\NewsController;
use App\Http\Controllers\admin\ResearchController;
use App\Http\Controllers\admin\JournalController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('product-mamages', ProductController::class);
    Route::resource('category-mamages', CategoryController::class);
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});