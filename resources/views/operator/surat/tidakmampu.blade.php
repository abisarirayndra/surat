@extends('master.warga')

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5><i class="fas fa-hashtag text-warning"></i> Data Pengajuan Surat Keterangan Tidak mampu</h5>
            <div class="p-3 mt-3">
                <div class="row">
                            <table>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td class="pl-4">{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td><b>NIK</b></td>
                                    <td class="pl-4">{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tempat, Tanggal Lahir</b></td>
                                    <td class="pl-4">{{$data->tempat_lahir}}, {{\Carbon\Carbon::parse($data->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                                </tr>
                                <tr>
                                    <td><b>Kelamin</b></td>
                                    <td class="pl-4">{{$data->kelamin}}</td>
                                </tr>
                                <tr>
                                    <td><b>Agama</b></td>
                                    <td class="pl-4">{{$data->agama}}</td>
                                </tr>
                                <tr>
                                    <td><b>Kewarganegaraan</b></td>
                                    <td class="pl-4">{{$data->kewarganegaraan}}</td>
                                </tr>
                                <tr>
                                    <td><b>Pekerjaan</b></td>
                                    <td class="pl-4">{{$data->pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td class="pl-4">{{$data->alamat}}</td>
                                </tr>
                                <tr>
                                    <td class="p-3"><b>Yang diajukan<b></td>
                                </tr>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td class="pl-4">{{ $data->nama_a }}</td>
                                </tr>
                                <tr>
                                    <td><b>Tempat, Tanggal Lahir</b></td>
                                    <td class="pl-4">{{$data->tempat_lahir_a}}, {{\Carbon\Carbon::parse($data->tanggal_lahir_a)->isoFormat('D MMMM Y')}}</td>
                                </tr>
                                <tr>
                                    <td><b>Kelamin</b></td>
                                    <td class="pl-4">{{$data->kelamin_a}}</td>
                                </tr>
                                <tr>
                                    <td><b>Sekolah/Perguruan Tinggi</b></td>
                                    <td class="pl-4">{{$data->sekolah_a}}</td>
                                </tr>
                                <tr>
                                    <td><b>Alasan</b></td>
                                    <td class="pl-4">{{$data->sekolah_a}}</td>
                                </tr>
                                <tr>
                                    <td><b>Nomor Whatsapp</b></td>
                                    <td class="pl-4">{{$data->wa}}</td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Pengajuan</b></td>
                                    <td class="pl-4">{{\Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y HH:mm')}}</td>
                                </tr>
                            </table>


                </div>
                <div class="row mt-4">
                    <form action="{{ route('operator.up-surat-tidakmampu', [$data->id]) }}" method="post" enctype="multipart/form-data">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @csrf
                        <div class="form-group row">
                            <div class="">
                                <label>Upload Surat (.pdf)</label>
                                <input type="file" class="form-control" name="file_surat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script type="text/javascript" src="{{asset('back/vendor/ckeditor/ckeditor.js')}}"></script>


@endsection



