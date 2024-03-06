<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function authenticate(LoginRequest $request)
    {
        if(Auth::attempt($request->only('email', 'password'), $request->filled('remember')))
            return to_route('dashboard');

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function create(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);

        User::create($data);
        return back()->with('swal_s', 'Akun berhasil dibuat. Silahkan login');
    }

    public function logout()
    {
        Auth::logout();
        Session::regenerate();

        return to_route('login');
    }
}
