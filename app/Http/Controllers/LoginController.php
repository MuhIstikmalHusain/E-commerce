<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;


class LoginController extends Controller
{
    
    public function index()
    {
        return view('logins.index');
    }

    public function create()
    {
        // dd('Halaman Rwgister');
        return view('logins.register');
    }

    public function store (Request $request){
    User::create([
        'nama' => $request-> nama,
        'jk' => $request-> jk, 
        'email'=> $request-> email,
        'no_telepon'=> $request-> no_telepon,
        'password'=> $request-> password
    ]);
    
    return redirect('/login');
    }

    public function auth(Request $request, )
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd($request ->user());
            
            // Cek role user
            if (Auth::user()->role == 'Admin' ) {
                return redirect()->intended('/admin-pages');
            } else {
                return redirect()->intended('/');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

}
