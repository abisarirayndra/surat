@extends('master.warga')

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5><i class="fas fa-hashtag text-warning"></i> Data Pengajuan KTP</h5>
            <div class="p-3 mt-3">
                <iframe src="{{ asset('surat/ktp/'. ) }}" frameborder="0"></iframe>
            </div>
        </div>
    </div>

@endsection



