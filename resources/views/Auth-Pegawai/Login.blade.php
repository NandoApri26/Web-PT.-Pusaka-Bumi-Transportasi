@extends('template.head')
@section('title', 'Login Pegawai')

@section('content')

    <body>
        <div id="auth">

            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <h5 class="auth-title text-center" style="font-size: 35px">Log in Pegawai.</h5>
                        <form action="{{ url('/login_store_pegawai') }}" method="post">
                            @csrf
                            <div class="form-group position-relative has-icon-left mb-4 mt-5">
                                <input type="text" class="form-control form-control-xl" name="name"
                                    placeholder="Username">
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
                            <div class="form-check form-check-lg d-flex align-items-end">
                                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class="text-gray-600">Belum memiliki akun? <a href="{{ url('/register_pegawai') }}"
                                    class="font-bold">Daftar</a>.</p>
                            <p><a class="font-bold" href="auth-forgot-password.html">Lupa Password?</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block">
                    <div id="auth-right">
                        <div class="auth-logo">
                            <a href="index.html"><img src="" alt="Logo"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
@endsection
