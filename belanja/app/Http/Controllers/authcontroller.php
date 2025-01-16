<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.sign-up'); // Ganti dengan nama view Anda
    }


    public function register(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
    
        // Buat pengguna baru
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        // Login pengguna yang baru dibuat
        auth()->login($user);
    
        // Arahkan ke halaman index
        return redirect()->route('index');
    }
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $credentials = $request->only('email', 'password');
    
        if (auth()->attempt($credentials)) {
            // Jika login berhasil, arahkan ke halaman index
            return redirect()->route('index');
        }
    
        // Jika login gagal, kembali ke halaman login dengan pesan error
        return redirect()->route('login')->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput(); // Mengisi kembali form dengan data sebelumnya
    }
    


    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        // Logika reset password
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
