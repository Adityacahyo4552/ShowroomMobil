<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request){

$validasi = $request->validate([
    'email' => ['required'],
    'password' => ['required'],
]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();
            $user = Auth::User();
            if ($user->role == 'admin') {
                return view('home')->with('alert', 'Login Berhasil!');
            } elseif ($user->role == 'karyawan') {
                return redirect()->intended('user');
            } elseif ($user->role == 'pelanggan') {
                return redirect()->intended('');
            }
            return redirect('/');
        }
    }

    public function register(Request $request){

User::create([
'name' => $request->name,
'email' => $request->email,
'password' => bcrypt($request->password),
'role' => "pelanggan",
'remember_token' => Str::random(60),

]);
return redirect('/')->with('alert', 'Registrasi Berhasil!');
}

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
