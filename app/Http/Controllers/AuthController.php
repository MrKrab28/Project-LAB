<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function login_user()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            if (!Auth::user()->email_verified_at) {
                Auth::logout();
            return redirect()->route('login')->with('loginError', 'Email belum diverifikasi');

            }
            return redirect()->route('home');
        }
        return redirect()->back()->with('LoginError', 'nim atau Password Salah' );
    }

    public function register_user()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
            // $user = new User();
            // $user->nim = $request->nim;
            // $user->password = bcrypt($request->password);
            // $user->nama = $request->nama;
            // $user->no_hp = $request->no_hp;
            // $user->save();

        $data = $request->validate([
            'nim' => 'required|unique:users',
            'nama' => 'required',
            'email' => 'required|unique:users',
            'no_hp' => 'required|unique:users',
            'password' => 'required|min:5',
        ]);

        $data['password'] = Hash::make($data['password']);
        $user=User::create($data);
        event(new Registered($user));
        // auth()->login($user);

        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('verification.notice');
    }



    public function logout(Request $request )
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function index_home()
    {
        return view('welcome');
    }
}
