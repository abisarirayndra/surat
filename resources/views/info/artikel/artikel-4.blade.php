@extends('master.master')

@section('content')
        <section class="page-section mt-3" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                          <li class="breadcrumb-item"><a href="{{route('berita-desa')}}">Berita Desa</a></li>
                          <li class="breadcrumb-item active" aria-current="page">LAPORAN PERTANGGUNGJAWABAN APBDES TAHUN 2020 DESA SAMBIMULYO</li>
                        </ol>
                      </nav>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h3>LAPORAN PERTANGGUNGJAWABAN APBDES TAHUN 2020 DESA SAMBIMULYO</h3>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/berita/002.jpg')}}" width="800" alt="">
                </div>
                <div class="text-justify mt-5">
                    buka Link <a class="text-dark" href="https://drive.google.com/file/d/13X9hdtfdJknsspmPDmdkS0ZhgIJiTaAk/view?usp=sharing">https://drive.google.com/file/d/13X9hdtfdJknsspmPDmdkS0ZhgIJiTaAk/view?usp=sharing</a>
                </div>
                <div class="row">
                    <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                    <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 18 Desember 2019</div>
                </div>
            </div>
        </section>


@endsection
