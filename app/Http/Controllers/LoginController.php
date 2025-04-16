<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('login.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Email atau Password salah.');
    }

    // Menampilkan halaman register
    public function register()
    {
        return view('login.register');
    }

    // Menangani proses register
    public function registerPost(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);
    
        User::create([
            'name' => $request->nama, // ← PASTIKAN pakai 'name', bukan 'nama'
            'email' => $request->email,
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Berhasil daftar! Silakan login.');
    }
    

    // Menampilkan halaman dashboard jika sudah login
    public function dashboard()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }

        return view('dasboard', compact('user'));
    }

    // Logout
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
