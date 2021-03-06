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
            <h5><i class="fas fa-hashtag text-success"></i> Pengajuan Surat</h5>
            <div class="">
                <h5 class="mt-3"> Surat Pengajuan KTP</h5>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th style="max-width: 20px">No</th>
                          <th>Nama</th>
                          <th>File Surat</th>
                          <th>Tanggal Pengajuan</th>
                          <th style="max-width: 120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($surat_ktp as $item)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama}}</td>
                            @if ($item->file_surat == null)
                                <td>Belum Tersedia</td>
                            @else
                                <td><a href="{{ route('operator.file-ktp', [$item->id]) }}" class="btn btn-sm btn-success" target="_blank">Lihat Surat</a></td>
                            @endif
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM YYYY HH:mm') }}</td>
                            <td>
                              <a href="{{ route('operator.lihat-ktp', [$item->id]) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                              <a href="{{ route('operator.hapus-pengajuan-ktp', [$item->id]) }}" onclick="return confirm('Anda yakin ingin menghapus akun ini ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5 class="mt-5"> Surat Keterangan Tidak Mampu</h5>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th style="max-width: 20px">No</th>
                          <th>Nama</th>
                          <th>File Surat</th>
                          <th>Tanggal Pengajuan</th>
                          <th style="max-width: 120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($surat_tidakmampu as $item)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama}}</td>
                            @if ($item->file_surat == null)
                                <td>Belum Tersedia</td>
                            @else
                            <td><a href="{{ route('operator.file-tidakmampu', [$item->id]) }}" class="btn btn-sm btn-success" target="_blank">Lihat Surat</a></td>
                            @endif
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM YYYY HH:mm') }}</td>
                            <td>
                              <a href="{{ route('operator.lihat-tidakmampu', [$item->id]) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                              <a href="{{ route('operator.hapus-pengajuan-tidakmampu', [$item->id]) }}" onclick="return confirm('Anda yakin ingin menghapus akun ini ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5 class="mt-5"> Surat Usaha</h5>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th style="max-width: 20px">No</th>
                          <th>Nama</th>
                          <th>File Surat</th>
                          <th>Tanggal Pengajuan</th>
                          <th style="max-width: 120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($surat_usaha as $item)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama}}</td>
                            @if ($item->file_surat == null)
                                <td>Belum Tersedia</td>
                            @else
                            <td><a href="{{ route('operator.file-usaha', [$item->id]) }}" class="btn btn-sm btn-success" target="_blank">Lihat Surat</a></td>

                            @endif
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM YYYY HH:mm') }}</td>
                            <td>
                              <a href="{{ route('operator.lihat-usaha', [$item->id]) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                              <a href="{{ route('operator.hapus-pengajuan-usaha', [$item->id]) }}" onclick="return confirm('Anda yakin ingin menghapus akun ini ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
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
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
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
