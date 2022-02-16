@extends('master.warga')

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5><i class="fas fa-hashtag text-success"></i> File Surat</h5>
            <div class="p-3 mt-3">
                <embed src="{{ asset('surat/ktp/'. $ktp->file_surat) }}" type="application/pdf" height="620" width="100%">
            </div>
        </div>
    </div>

@endsection



