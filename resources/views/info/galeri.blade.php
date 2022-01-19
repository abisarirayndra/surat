@extends('master.master')

@section('content')
        <section class="page-section bg-dark" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-warning">Galeri Desa</h2>
                    <h3 class="section-subheading text-white">Foto-foto Kegiatan Desa</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Pembinaan Posyandu</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/001.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Pembinaan Posyandu</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/002.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Pembinaan RT/RW</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/003.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">LPJ APBDes</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/004.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Pengundian Calon Kades</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/005.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Musringbangdes</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/006.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Musringbangdes</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/007.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Musringbangdes</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/008.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Musringbangdes</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/009.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Potensi Pertanian Desa</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/010.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Potensi Pertanian Desa</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/011.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">Potensi Kesenian Desa</div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/012.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <img class="img-fluid" src="{{asset('assets/img/galeri/013.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/001.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"></div>
                                </div>
                                <img class="img-fluid" src="{{asset('assets/img/galeri/001.jpg')}}" alt="" />
                            </a>
                        </div>
                    </div> --}}
                </div>
                </div>
        </section>


@endsection
