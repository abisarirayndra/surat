<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SuratController extends Controller
{
    public function suratWarga(){
        $user = Auth::user()->email;

        return view('warga.surat', compact('user'));
    }
}
