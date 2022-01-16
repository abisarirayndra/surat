@extends('master.master')

@section('content')
        <section class="page-section mt-3" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                          <li class="breadcrumb-item"><a href="{{route('berita-desa')}}">Berita Desa</a></li>
                          <li class="breadcrumb-item active" aria-current="page">PEMBINAAN RT DAN RW DESA SAMBIMULYO</li>
                        </ol>
                      </nav>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h3>PEMBINAAN RT DAN RW DESA SAMBIMULYO</h3>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/berita/003.jpg')}}" width="800" alt="">
                </div>
                <div class="text-justify mt-5">
                    Sambimulyo - Rabu 18 Desember 2019, Kepala Desa Sambimulyo Andik Santoso membuka  secara langsung kegiatan Pembinaan RT dan RW yang diselenggarakan di Kantor Desa Sambimulyo. Pembinaan ini dihadiri oleh Forpimka Kecamatan Bangorejo, Babinsa, Bhabinkabtibnas, Perangkat Desa dan seluruh RT dan RW Desa Sambimulyo. Dengan adanya Pembinaan ini di harapkan Peran serta RT dan RW dalam hal Administrasi, Pembangunan dan Peningkatan Potensi Desa menjadi lebih baik lagi.
                </div>
                <div class="row">
                    <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                    <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 18 Desember 2019</div>
                </div>
            </div>
        </section>


@endsection
