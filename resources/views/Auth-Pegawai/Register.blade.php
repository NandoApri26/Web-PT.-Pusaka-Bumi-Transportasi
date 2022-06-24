@extends('template.head')
@section('title', 'Register Pegawai')

@section('content')

    <body>
        <div id="auth">

            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <h1 class="auth-title" style="font-size: 35px">Sign Up Pegawai</h1>
                        <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                        <form action="{{ url('/register_store_pegawai') }}" method="post">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" name="email"
                                    placeholder="Email">
                                <div class="form-control-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" name="name"
                                    placeholder="Username">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="text" class="form-control form-control-xl" name="no_pegawai"
                                    placeholder="No Pegawai">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl" name="password"
                                    placeholder="Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <input type="password" class="form-control form-control-xl" name="confirm_password"
                                    placeholder="Confirm Password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <input type="hidden" name="level" value="pegawai">
                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class='text-gray-600'>Sudah memiliki akun? <a href="{{ url('/login_pegawai') }}"
                                    class="font-bold">Masuk</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">

                        <div class="auth-logo">
                            <a href="index.html"><img src="{{ asset('template/assets/images/logo/logo.png') }}"
                                    alt="Logo"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
@endsection
