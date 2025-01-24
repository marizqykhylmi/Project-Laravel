<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\AboutUsController;

Route::get('/', function () {
    return view('auth.login'); // Halaman login
});

Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');



//post, delete, edit
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/add-post', [GalleryController::class, 'create'])->name('post.create');
Route::post('/add-post', [GalleryController::class, 'store'])->name('post.store');

Route::get('/sponsor', [SponsorController::class, 'indexSponsor'])->name('sponsor');
Route::get('/add-sponsor', [SponsorController::class, 'create'])->name('sponsor.create');
Route::post('/add-sponsor', [SponsorController::class, 'store'])->name('sponsor.store');

Route::get('/program', [PostController::class, 'indexProgram'])->name('program');
Route::get('/add-program', [PostController::class, 'create'])->name('program.create');
Route::post('/add-program', [PostController::class, 'store'])->name('program.store');
//gallery
Route::delete('/gallery/{id}/delete', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::post('/gallery/update/{id?}', [GalleryController::class, 'update'])->name('gallery.update');
Route::put('/gallery/{id}/update', [PostController::class, 'update'])->name('gallery.update');

//about us
Route::post('/save-description', [AboutUsController::class, 'saveDescription']);
Route::post('/save-vision', [AboutUsController::class, 'saveVision']);
Route::post('/save-mission', [AboutUsController::class, 'saveMission']);

//program
Route::delete('/posts/{id}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
Route::put('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');



//sponsor
Route::delete('/sponsor/{id}', [SponsorController::class, 'destroy'])->name('sponsor.destroy');







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

Route::get('/slider', function () {
    return view('slider'); // Halaman gallery
})->name('slider');
