<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.sign-up'); // Ganti dengan path yang sesuai untuk view registrasi
    }


    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password'); // Pastikan file view ini ada.
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->route('register')
            ->withErrors($validator)
            ->withInput();
        }

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Melakukan login otomatis setelah registrasi
        auth()->login($user);

        // Redirect ke halaman dashboard setelah login
        return redirect()->route('index');
    }

    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Ganti dengan path yang sesuai untuk view login
    }

    // Proses login
    public function login(Request $request)
{
    // Validasi input
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil, redirect ke halaman index
        return redirect()->route('index'); // Pastikan route ini sesuai
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    return back()->withErrors(['email' => 'Email or password is incorrect.']);
}

    // Proses logout
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'You have been logged out.'); // Kembali ke halaman login setelah logout
    }

    public function index()
    {   
        $title = "Welcome to my blog";
        // return view ('pages.index', compact('title')); // first method 

        return view ('pages.index')->with('title',$title); // 2 method 
    }
    

}

