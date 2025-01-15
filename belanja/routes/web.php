<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login'); // Halaman login
});

Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/sign-up', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

// Halaman index yang hanya bisa diakses setelah login
Route::get('/index', function () {
    return view('index'); // Pastikan ada file index.blade.php di resources/views
})->name('index')->middleware('auth'); // Menambahkan middleware 'auth'

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

?>
