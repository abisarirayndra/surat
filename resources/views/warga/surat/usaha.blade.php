@extends('master.warga')

@section('content')
<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Formulir Surat Usaha</h1>
    <p class="mb-4">Diisi dengan data yang benar-benar sesuai dengan identitas</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
                <form class="" action="{{ route('warga.up-data-surat-usaha') }}" method="POST" >
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
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Nama Lengkap" name="nama" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="tempat">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-user" name="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-user" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="nik">Nomor Induk Kependudukan </label>
                            <input type="text" class="form-control form-control-user"
                                placeholder="NIK/No. KTP (16 Karakter)" name="nik" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="markas">Jenis Kelamin</label>
                            <select name="kelamin" class="form-control form-control-user" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="markas">Agama</label>
                            <input type="text" class="form-control form-control-user"
                                placeholder="Agama" name="agama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="alamat">Alamat</label>
                                <input type="text" class="form-control form-control-user" id="alamat"
                                    placeholder="Alamat" name="alamat" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="sekolah">Pekerjaan</label>
                            <input type="text" class="form-control form-control-user" id="pekerjaan"
                                placeholder="Pekerjaan" name="pekerjaan" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="markas">Status Perkawinan</label>
                            <select name="status" class="form-control form-control-user" required>
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label for="alamat">Usaha Yang Dimiliki</label>
                                <input type="text" class="form-control form-control-user" id="usaha"
                                    placeholder="Usaha Yang dimiliki" name="usaha" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="wa">No. Whatsapp</label>
                                <input type="number" class="form-control form-control-user" id="wa"
                                    placeholder="Nomor Whatsapp/Telepon" name="wa" required>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

</div>

@endsection

@section('js')
<script type="text/javascript" src="{{asset('back/vendor/ckeditor/ckeditor.js')}}"></script>


@endsection



