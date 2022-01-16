<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function beranda(){
        return view('info.beranda');
    }

    public function beritaDesa(){
        return view('info.info');
    }

    public function artikelSatu(){
        return view('info.artikel.artikel-1');
    }
}
