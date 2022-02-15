@extends('master.warga')

@section('title')
    <link href="{{asset('vendor/datatables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h5><i class="fas fa-hashtag text-warning"></i> Pengajuan Surat</h5>
            <div class="p-3 mt-3">
                <div class="row mb-3">
                    <button type="button" class="btn btn-sm btn-warning mr-3">
                        <i class="fas fa-file-archive"></i> Tambah Surat
                    </button>
                </div>
                {{-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th style="max-width: 20px">No</th>
                          <th>Nama</th>
                          <th>Nomor Registrasi</th>
                          <th>Email</th>
                          <th>Tanggal Daftar</th>
                          <th style="max-width: 120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pendidik as $item)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama}}</td>
                            @if($item->nomor_registrasi == null)
                            <td>Belum Tersedia</td>
                            @else
                            <td>{{ $item->nomor_registrasi }}</td>
                            @endif
                            <td>{{ $item->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->updated_at)->isoFormat('dddd, D MMMM YYYY HH:mm') }}</td>
                            <td>
                              <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                              <a href="" onclick="return confirm('Anda yakin ingin menghapus akun ini ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/datatables.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    <script type="text/javascript">
        $('#password, #confirm_password').on('keyup', function () {
              if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Password Cocok').css('color', 'green');
                $('#button').removeAttr("disabled");
              } else {
                $('#message').html('Password Tidak Cocok').css('color', 'red');
                var element = document.getElementById('button');
                element.setAttribute('disabled','disabled');
              }

            });
      </script>
@endsection
