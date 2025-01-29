<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.home.index');
    }

    public function userProfile()
    {
        return view('backend.home.index');
    }
    public function gallery()
    {
        return view('backend.gallery');
    }
    public function product()
    {
        return view('backend.product');
    }
    public function login()
    {
        return view('backend.login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'Email atau Password salah!'
        ]);
    }
    public function passwordRequest()
    {
        return view('backend.forgot-password');
    }
    public function register()
    {
        return view('backend.sign-up');
    }
}
