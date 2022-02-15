@extends('master.warga')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-8 col-md-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="text-center mt-4">
                        <img src="{{asset('assets/img/icon2.png')}}" width="50" alt="">
                    </div>
                        <div class="text-center mt-4 mb-4">
                            <h4 class="text-dark"><i class="fas fa-hashtag text-success"></i> Pilih Surat Yang Diajukan</h4>
                        </div>
                        <div class="text-center mb-4 mt-4">
                            <a href="{{ route('warga.data-surat-ktp') }}" class="btn btn-success">Pengajuan KTP</a>
                            <a href="{{ route('warga.data-surat-tidakmampu') }}" class="btn btn-success">Keterangan Tidak Mampu</a>
                            <a href="{{ route('warga.data-surat-usaha') }}" class="btn btn-success">Keterangan Usaha</a>

                        </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
