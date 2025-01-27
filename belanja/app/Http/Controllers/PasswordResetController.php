<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function resetPassword(Request $request)
    {
        // Validasi data
        $request->validate([
            'email' => 'required|email',
            'new_password' => 'required|min:8', // Pastikan ada "new_password_confirmation"
            'new_password_confirmation' => 'required|min:8',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email not found!']);
        }

        // Validasi password baru dengan password konfirmasi
        if ($request->new_password !== $request->new_password_confirmation) {
            return back()->withErrors(['new_password' => 'Password confirmation does not match!']);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();
        $password = 'hello';
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo $hashed_password;

        return redirect()->back()->with('status', 'Password successfully updated!');
    }

}

