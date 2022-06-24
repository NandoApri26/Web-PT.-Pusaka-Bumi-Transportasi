<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function register_store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'no_pegawai' => 'required',
                'password' => 'required|alpha_num',
                'confirm_password' => 'required|same:password|min:8|max:10',

            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_pegawai' => $request->no_pegawai,
            'password' => Hash::make($request->password),
            'level' => 'admin'
        ]);
        // Alert::success('Berhasil', 'Pendaftaran Berhasil');
        return redirect('/login');
    }
    public function login_store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if (!Auth::attempt($request->only(['name', 'password']))) {
            return redirect('/login')->with('status', 'Email atau Password salah');
        } else {
            return redirect('master-data/dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}