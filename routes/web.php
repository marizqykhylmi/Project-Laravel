<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SponsorController;

Route::get('/', function () {
    return view('auth.login'); // Halaman login
});

Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

//! Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/add-post-gallery', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/add-post-gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/edit-post-gallery/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/edit-post-gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::delete('/delete-post-gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');

//! Sponsor
Route::get('/sponsor', [SponsorController::class, 'index'])->name('sponsor');
Route::get('/add-post-sponsor', [SponsorController::class, 'create'])->name('sponsor.create');
Route::post('/add-post-sponsor', [SponsorController::class, 'store'])->name('sponsor.store');
Route::get('/edit-post-sponsor/{id}', [SponsorController::class, 'edit'])->name('sponsor.edit');
Route::put('/edit-post-sponsor/{id}', [SponsorController::class, 'update'])->name('sponsor.update');
Route::delete('/delete-post-sponsor/{id}', [SponsorController::class, 'destroy'])->name('sponsor.delete');

//! Program
Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::get('/add-post-program', [ProgramController::class, 'create'])->name('program.create');
Route::post('/add-post-program', [ProgramController::class, 'store'])->name('program.store');
Route::get('/edit-post-program/{id}', [ProgramController::class, 'edit'])->name('program.edit');
Route::put('/edit-post-program/{id}', [ProgramController::class, 'update'])->name('program.update');
Route::delete('/delete-post-program/{id}', [ProgramController::class, 'destroy'])->name('program.delete');

//! List Product
Route::get('/list-products', [ProductController::class, 'index'])->name('list-products');
Route::get('/add-list-product', [ProductController::class, 'create'])->name('list-product.create');
Route::post('/add-list-product', [ProductController::class, 'store'])->name('list-product.store');
Route::get('/edit-list-product/{id}', [ProductController::class, 'edit'])->name('list-product.edit');
Route::put('/edit-list-product/{id}', [ProductController::class, 'update'])->name('list-product.update');
Route::delete('/delete-list-product/{id}', [ProductController::class, 'destroy'])->name('list-product.delete');

//! About Us
// Route::get('/index', [ContentController::class, 'index'])->name('index');
Route::get('/about-us', [ContentController::class, 'index'])->name('about-us');
Route::get('/add-about-us/{type}', [ContentController::class, 'create'])->name('create-content');
Route::post('/add-about-us/{type}', [ContentController::class, 'store'])->name('store-content');
Route::get('/edit-about-us/{type}/{id}', [ContentController::class, 'edit'])->name('edit-content');
Route::put('/edit-about-us/{type}/{id}', [ContentController::class, 'update'])->name('update-content');



// Halaman index yang hanya bisa diakses setelah login
Route::get('/index', function () {
    return view('index'); // Pastikan ada file index.blade.php di resources/views
})->name('index')->middleware('auth'); // Menambahkan middleware 'auth'

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('user-profile', function () {
    return view('user-profile'); // Halaman user profile
})->name('user-profile');


Route::get('checkout', function () {
    return view('checkout'); // Halaman checkout
})->name('checkout');

Route::get('add-products', function () {
    return view('add-products'); // Halaman add products
})->name('add-products');

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
