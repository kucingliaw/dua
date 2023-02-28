<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    // Login
    public function login(Request $request)
    {
        // Ambil data dari form
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cek jika data ada di database
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Jika benar, masuk ke home
            return redirect()->intended('/');
        }

        // Jika gagal, kembali ke login form dan beri pesan gagal
        return back()->with('loginFailed', 'Login Gagal!');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
