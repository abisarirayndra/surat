@extends('master.master')

@section('content')
        <section class="page-section mt-3" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                          <li class="breadcrumb-item"><a href="{{route('berita-desa')}}">Berita Desa</a></li>
                          <li class="breadcrumb-item active" aria-current="page">PENGUNDIAN NOMOR URUT DAN PENETAPAN CALON KEPALA DESA SAMBIMULYO</li>
                        </ol>
                      </nav>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h3>PENGUNDIAN NOMOR URUT DAN PENETAPAN CALON KEPALA DESA SAMBIMULYO</h3>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/berita/001.jpg')}}" width="800" alt="">
                </div>
                <div class="text-justify mt-5">
                    Sambimulyo-30 Agustus 2019 Dalam rangka menentukan pemimpin yang baru yang akan gelar pada tanggal 09 Oktober 2019, Pemerintah Desa Sambimulyo mengadakan Pengundian Nomer urut dan Penetapan Calon Kepala Desa Sambimulyo, dalam acara tersebut di hadiri oleh Jajaran Formpimka Kecamatan, BPD, LPMD, Tokoh Masyarakat, RT dan RW, hasil dari rapat tersebut di hasilkan bahwa :

                    Nomer Urut 1 Bapak Wakidi
                    Nomer Urut 2 Bapak Andik Santoso
                    Nomer Urut 3 Bapak Wintoyo, S.H
                    “Diharapkan dalam pemilihan ini semua dapat berjalan Aman, Lancar dan Damai”, kata Bapak Eko Budi Sarwono selaku Kasi Pemerintahan Kecamatan Bangorejo.
                </div>
                <div class="row">
                    <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                    <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 02 September 2019</div>
                </div>
            </div>
        </section>


@endsection
