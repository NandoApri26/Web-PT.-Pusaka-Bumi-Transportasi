@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi')

@section('content')
    <div id="main">
        <!-- Awal Login -->
        <section id="Login">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-lg-2"></div>
                    <div class="col-8 col-lg-8 bg-Login ">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 ">
                                <div class="container">
                                    <img src="{{ asset('../template-frontend/assets/Logo_PBT-removebg-preview.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="container Judul">
                            <div class="row">
                                <div class="col">
                                    <h2 style="text-align: center;">SELAMAT DATANG</h2>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ml-lg-4 ml-sm-4 mr-lg-4 mr-sm-4">
                                    <form action="{{ url('/web-login_store') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input name="email" type="email" class="form-control" id="Email"
                                                placeholder="loream@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input name="password" type="password" class="form-control" id="Password"
                                                placeholder="******">
                                        </div>
                                        <div class="row">
                                            <div class="col text-lg-right text-sm-right mr-lg-4 mr-sm-4">
                                                <a href="" class="text-primary">
                                                    <h6>Lupa password?</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ml-lg-4 ml-sm-4 mr-lg-4 mr-sm-4 text-center mb-3">
                                            <a href=""><button type="submit" class="btn btn-primary"
                                                    style="border-radius: 50px;">LOGIN</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 text-center mb-3">
                                    <h6>Belum punya akun? <a href="{{ url('/web-register') }}">Buat akun</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Login -->
    </div>
@endsection
