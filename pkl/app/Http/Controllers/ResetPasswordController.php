<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Password as FacadesPassword;


class ResetPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('backend.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', 'Link reset password telah dikirim ke email Anda.');
        }

        return back()->withErrors(['email' => 'Gagal mengirimkan link reset password.']);
    }

    public function formResetPassword(Request $request)
    {
        $token = $request->query->get('token');
        return view('backend.reset-password', ['token' => $token]);
    }

    public function submitResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
        );

        // dd($status, Password::PASSWORD_RESET, $status == Password::PASSWORD_RESET);
        if ($status == Password::PASSWORD_RESET) {
            return redirect('/login')->with('status', 'Password Anda telah direset, silakan login.');
        }

        return back()->withErrors(['email' => 'Gagal mereset password.']);
    }

}

//     public function showResetPasswordForm($token)
//     {
//         return view('reset-password.submit', ['token' => $token]);
//     }

//     public function resetPassword(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|confirmed|min:8',
//             'token' => 'required',
//         ]);

//         $status = Password::reset(
//             $request->only('email', 'password', 'password_confirmation', 'token'),
//             function ($user) use ($request) {
//                 $user->password = Hash::make($request->password);
//                 $user->save();
//             }
//         );

//         if ($status == Password::PASSWORD_RESET) {
//             return redirect('/login')->with('status', 'Password Anda telah direset, silakan login.');
//         }

//         return back()->withErrors(['email' => 'Gagal mereset password.']);
//     }
// }
