@extends('master.master')

@section('content')

        <!-- Masthead-->
        <header class="head">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>

                </ul>

                <!-- The slideshow -->
                {{-- image 1100x500 --}}
                <div class="carousel-inner">
                  <div class="carousel-item ">
                    <img src="{{asset('assets/img/002.jpg')}}" alt="Los Angeles" width="100%" height="100%">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/001.jpg')}}" width="100%" height="100%">
                  </div>
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/003.jpg')}}" width="100%" height="100%">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>
        </header>
        {{-- Profil --}}
        <section class="page-section" id="profil">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-dark">Profil Desa</h2>
                    <h3 class="section-subheading text-white"></h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center"><img src="{{asset('assets/img/icon2.png')}}" alt="Krisna" width="200" height="250"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="pt-2 pl-4 text-justify" style="font-size: 14pt"> Sambimulyo adalah sebuah nama desa di wilayah Bangorejo, Kabupaten Banyuwangi, Provinsi Jawa Timur, Indonesia.

                            Sambimulyo berdiri dari proses pemecahan Desa Sambirejo pada saat kepemimpinan Kepala Desa Drs. Kasworo, tepatnya tahun 1995. Padaa saat itu, warga masyarakat menghendaki pemecahan desa menjadi 2 (dua) desa, yaitu:

                            Desa Sambirejo, yang meliputi Dusun Pasembon dan Dusun Kedungagung.
                            Desa Sambimulyo, sebagai desa pecahan yang meliputi Dusun Sambirejo dan Dusun Kedungrejo.
                            Pada awal berdirinya Desa Sambimulyo, yang ditunjuk sebagai Pejabat Sementara (Pjs) Kepala Desa Persiapan Sambimulyo adalah Ngabdullah untuk masa jabatan 1995 hingga 1997. Pada tahun 1998, untuk pertama kalinya dilaksanakan Pemilihan Kepala Desa di Desa Sambimulyo. Dalam pemilihan tersebut ditetapkan 2 (dua) orang calon, yaitu (1) Sujono, guru MTsN Sambirejo yang pernah mencalonkan kepala Desa bersama Bapak Kasworo dan; (2) Teguh, Staf Kecamatan Bangorejo. Kemudian terpilih 1 (satu) dari antara 2 (dua) calon Kepala Desa tersebut, yakni Sujono yang secara resmi sebagai kepala Desa terpilih oleh Masyarakat Sambimulyo dan dilantik menjadi Kepala Desa Sambimulyo yang pertama. Bapak Sujono menjabat sebagai Kepala Desa Sambimulyo dalam 2 peride yaitu periode 1998 sampai dengan tahun 2012.

                            Setelah Bapak Sujono, Calon Kepala Desa Sambimulyo berikutnya yang dalam pemilihan tersebut terdapat 3 calon yaitu (1) Wintoyo, SH, Kepala Dusun Sambirejo (2) Ali Shodiq, S.Ag Guru SMK Nusantara (3) Wakidi , Kasub Blok Dusun Kedungrejo. Kemudian terpilih 1 (satu) dari diantara 3 (tiga) Calon Kepala Desa tersebut, yakni Wintoyo, SH dalam periode 2014-2019.

                            Setelah periode Bapak Wintoyo, SH, pada tahun 2019 diadakan pemilihan Kepala Desa Sambimulyo dengan total pendaftaran 3 peserta yakni 1. Wakidi , 2 Andik Santoso, dan 3 Wintoyo, SH. Kemudian terpilih 1 (satu) dari diantara 3 (tiga) calon Kepala Desa tersebut yakni Bapak Andik Santoso.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Lokasi Kantor Desa</h2>
                    <h3 class="section-subheading text-warning"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.2352561736925!2d114.17192568353309!3d-8.510872399916869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3f9253507adc9%3A0xd3e3a2552d4e2014!2sKantor%20Desa%20Sambimulyo!5e0!3m2!1sen!2sid!4v1642297314686!5m2!1sen!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <h6 class="text-warning mt-4 mb-4">Jl. Gajah Mada, Gn. Sari, Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
