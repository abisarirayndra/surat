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

    public function artikelDua(){
        return view('info.artikel.artikel-2');
    }

    public function artikelTiga(){
        return view('info.artikel.artikel-3');
    }

    public function artikelEmpat(){
        return view('info.artikel.artikel-4');
    }

    public function galeriDesa(){
        return view('info.galeri');
    }
}
