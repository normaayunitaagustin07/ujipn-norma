<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

     public function authenticate(Request $request): RedirectResponse
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek role user
            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }
 
            return redirect()->route('siswa.dashboard');

            // Jika role tidak diketahui
            Auth::logout();
            return redirect()->route('logout')->with('info', 'Role tidak dikenali!');
        }
 
        return back()->with('info', 'Email atau password anda salah');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
