@extends('master.auth')

@section('title')
    <title>Daftar Akun</title>
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
                                      <h1 class="h4 text-gray-900 mb-4">Pengajuan Surat Desa Sambimulyo</h1>
                                  </div>
                                  <form class="user" action="" method="post">
                                    @csrf
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user"
                                              id="exampleInputEmail" aria-describedby="emailHelp"
                                              placeholder="Masukkan Email Terdaftar" name="email"
                                              >
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control form-control-user"
                                              id="exampleInputPassword" placeholder="Password" name="password"
                                              >
                                      </div>
                                      <button type="submit" class="btn btn-success btn-user btn-block">
                                          Login
                                      </button>
                                  </form>
                                  <hr>

                                  <div class="text-center">
                                      <div class="row">
                                            <small>Belum punya akun ? </small> <a class="btn btn-sm btn-primary ml-1" href="{{ route('registrasi') }}">Daftar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>
@endsection

