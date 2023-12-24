<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Pages.Auth.Register');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required|string|max:250|unique:users,username',
            'whatsapp' => 'required|string|max:25|unique:users,whatsapp',
            'jenis_kelamin' => 'required',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'role_id' => 2,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'whatsapp' => $request->whatsapp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => null,
            'status' => true,
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('customer.home')->withSuccess('Registrasi berhasil & anda telah login!');
    }
}
