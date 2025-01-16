<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login'); // Halaman login
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');

Route::get('/index', [AuthController::class, 'index'])->name('index')->middleware('auth');

// Rute ke halaman index (setelah login)
Route::get('/index', function () {
    return view('index');
})->name('index')->middleware('auth');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


use Illuminate\Support\Facades\Cache;

Route::get('/cache-driver', function () {
    return Cache::getDefaultDriver();
});

?>
