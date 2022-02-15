<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use Alert;

class AuthController extends Controller
{
    public function login(){
        return view('administrasi.login');
    }

    public function registrasi(){
        return view('administrasi.registrasi');
    }

    public function upRegistrasi(Request $request){
        $request->validate([
            'email' => 'required|unique:tbl_users|email',
            'password' => 'required',
        ],[
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email salah',
            'email.unique' => 'Email sudah terdaftar, silakan login atau menggunakan email lain',
            'password' => 'Password harus diisi'
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1,
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            if(auth()->user()->role_id == 1){
                Alert::toast('Selamat Datang Pendaftar','success');
                return redirect()->route('warga.pengajuan-surat');
            }
        }
        Alert::error('Akses tidak diizinkan','Gagal');
        return redirect('masuk');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Alert::success('Kamu berhasil keluar', 'Selamat tinggal!');
        return redirect()->route('login');
    }
}
