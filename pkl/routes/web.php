<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/user-profile', [DashboardController::class, 'userProfile'])->name('user-profile');
Route::get('/cart', [DashboardController::class, 'cart'])->name('cart');
Route::get('/about-us', [DashboardController::class, 'aboutUs'])->name('about-us');

//logincontroller
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');


Route::get('/post-create', [DashboardController::class, 'postCreate'])->name('post.create');
Route::get('/sponsor-create', [DashboardController::class, 'sponsorCreate'])->name('sponsor.create');
Route::get('/program-create', [DashboardController::class, 'programCreate'])->name('program.create', );
Route::get('/gallery', [DashboardController::class, 'gallery'])->name('gallery');
Route::get('/product', [DashboardController::class, 'product'])->name('product');
Route::get('/program', [DashboardController::class, 'program'])->name('program');
Route::get('/sponsor', [DashboardController::class, 'sponsor'])->name('sponsor');
Route::get('/slider', [DashboardController::class, 'slider'])->name('slider');

Route::get('/checkout', [DashboardController::class, 'checkout'])->name('checkout');
Route::get('/add-post-gallery', [DashboardController::class, 'add-post-gallery'])->name('add-post-gallery');
Route::get('/add-post-sponsor', [DashboardController::class, 'add-post-sponsor'])->name('add-post-sponsor');
Route::get('/add-post-program', [DashboardController::class, 'add-post-program'])->name('add-post-program');
Route::get('/add-products', [DashboardController::class, 'add-products'])->name('add-products');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');


Route::get('/register', [RegistrationController::class, 'showRegister'])->name('register');
Route::post('/register', [RegistrationController::class, 'register'])->name('register.submit');



Route::get('/reset-password', [ResetPasswordController::class, 'showForgotPasswordForm'])->name('reset-password');
Route::post('/reset-password', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('reset-password.submit');
Route::get('/form-reset-password', [ResetPasswordController::class, 'formResetPassword'])->name('password.reset');
Route::post('/reset-password/reset', [ResetPasswordController::class, 'submitResetPassword'])->name('password.reset.submit');
