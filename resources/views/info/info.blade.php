@extends('master.master')

@section('content')
        <section class="page-section mt-5" id="portfolio">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-heading text-uppercase text-dark">Berita Desa</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
                        <div class="text-center">
                            <a href=""><img class="img-fluid" src="{{asset('assets/img/berita/002.jpg')}}" width="250" alt="Tidak ada gambar" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6 mb-4">
                        <div class="row">
                            <a href=""><h5>LAPORAN PERTANGGUNGJAWABAN APBDES TAHUN 2020 DESA SAMBIMULYO</h5></a>
                        </div>
                        <div class="row">
                            <p>buka Link https://drive.google.com/file/d/13X9hdtfdJknsspmPDmdkS0ZhgIJiTaAk/view?usp=sharing

                            </p>
                        </div>
                        <div class="row">
                            <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                            <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 14 Desember 2020</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
                        <div class="text-center">
                            <a href=""><img class="img-fluid" src="{{asset('assets/img/berita/002.jpg')}}" width="250" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6 mb-4">
                        <div class="row">
                            <a href=""><h5>LAPORAN PERTANGGUNGJAWABAN APBDES TAHUN 2019 DESA SAMBIMULYO</h5></a>
                        </div>
                        <div class="row">
                            <p>buka Link https://drive.google.com/file/d/13X9hdtfdJknsspmPDmdkS0ZhgIJiTaAk/view?usp=sharing

                            </p>
                        </div>
                        <div class="row">
                            <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                            <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 14 Desember 2020</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
                        <div class="text-center">
                            <a href=""><img class="img-fluid" src="{{asset('assets/img/berita/003.jpg')}}" width="250" alt="Tidak ada gambar" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6 mb-4">
                        <div class="row">
                            <a href=""><h5>PEMBINAAN RT DAN RW DESA SAMBIMULYO</h5></a>
                        </div>
                        <div class="row">
                            <p>Sambimulyo - Rabu 18 Desember 2019, Kepala Desa Sambimulyo Andik Santoso membuka  secara langsung kegiatan Pembinaan RT dan RW yang diselenggarakan di Kantor Desa Sambimulyo. Pembinaan ini dihadiri oleh Forpimka Kecamatan Bangorejo, ...

                            </p>
                        </div>
                        <div class="row">
                            <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                            <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 18 Desember 2019</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-6 mb-4">
                        <div class="text-center">
                            <a href="{{ route('artikel-1') }}"><img class="img-fluid" src="{{asset('assets/img/berita/001.jpg')}}" width="250" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-xs-6 mb-4">
                        <div class="row">
                            <a href="{{ route('artikel-1') }}"><h5>PENGUNDIAN NOMOR URUT DAN PENETAPAN CALON KEPALA DESA SAMBIMULYO</h5></a>
                        </div>
                        <div class="row">
                            <p>Sambimulyo-30 Agustus 2019 Dalam rangka menentukan pemimpin yang baru yang akan gelar pada tanggal 09 Oktober 2019, Pemerintah Desa Sambimulyo mengadakan Pengundian Nomer urut dan Penetapan Calon Kepala Desa Sambimulyo, dalam ...</p>
                        </div>
                        <div class="row">
                            <div class="text-muted"><i class="fas fa-feather-alt"></i> admin</div>
                            <div class="text-muted ml-3"><i class="fas fa-calendar-day"></i> 02 September 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
