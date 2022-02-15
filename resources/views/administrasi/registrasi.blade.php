@extends('master.auth')

@section('title')
    <title>Daftarkan Email</title>
@endsection

@section('content')
<body class="bg-gradient-success">

  <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

          <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg-6 d-none d-lg-block text-center mt-4"><img src="{{asset('assets/img/icon2.png')}}" width="250"  alt=""></div>
                          <div class="col-lg-6">
                              <div class="p-5">
                                  <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Daftarkan Email</h1>
                                  </div>
                                  @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                  <form class="user" action="{{ route('upload-reg') }}" method="post">
                                    @csrf
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user"
                                              id="exampleInputEmail" aria-describedby="emailHelp"
                                              placeholder="Masukkan Email" name="email"
                                              >
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                      </div>
                                      <button id="button" class="btn btn-success btn-user btn-block" type="submit">
                                          Daftar
                                      </button>
                                  </form>
                                  <hr>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

@endsection

@section('js')
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

