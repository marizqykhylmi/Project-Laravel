<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('auth.login'); // Halaman login
});

Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

Route::get('/gallery', [PostController::class, 'index'])->name('gallery');
Route::get('/add-post', [PostController::class, 'create'])->name('post.create');
Route::post('/add-post', [PostController::class, 'store'])->name('post.store');

Route::get('/sponsor', [PostController::class, 'indexSponsor'])->name('sponsor.index');



// Route::get('/sponsor', [PostController::class, 'index'])->name('sponsor.index');
// Route::post('/post', [PostController::class, 'store'])->name('post.store');


// Halaman index yang hanya bisa diakses setelah login
Route::get('/index', function () {
    return view('index'); // Pastikan ada file index.blade.php di resources/views
})->name('index')->middleware('auth'); // Menambahkan middleware 'auth'

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('user-profile', function () {
    return view('user-profile'); // Halaman user profile
})->name('user-profile');

Route::get('list-products', function () {
    return view('list-products'); // Halaman list products
})->name('list-products');

Route::get('checkout', function () {
    return view('checkout'); // Halaman checkout
})->name('checkout');

//route add post
Route::get('add-post-gallery', function () {
    return view('add-post-gallery'); // Halaman add post
})->name('add-post-gallery');

Route::get('add-post-sponsor', function () {
    return view('add-post-sponsor'); // Halaman add post
})->name('add-post-sponsor');

Route::get('add-post-program', function () {
    return view('add-post-program'); // Halaman add post
})->name('add-post-program');

Route::get('add-products', function () {
    return view('add-products'); // Halaman add products
})->name('add-products');

Route::get('about-us', function () {
    return view('about-us'); // Halaman about us
})->name('about-us');

Route::get('visi-misi', function () {
    return view('visi-misi'); // Halaman visi misi
})->name('visi-misi');

Route::get('/product', function () {
    return view('product'); // Halaman gallery
})->name('product');

Route::get('/cart', function () {
    return view('cart'); // Halaman gallery
})->name('cart');

Route::get('/program', function () {
    return view('program'); // Halaman gallery
})->name('program');

Route::get('/sponsor', function () {
    return view('sponsor'); // Halaman gallery
})->name('sponsor');

Route::get('/slider', function () {
    return view('slider'); // Halaman gallery
})->name('slider');

