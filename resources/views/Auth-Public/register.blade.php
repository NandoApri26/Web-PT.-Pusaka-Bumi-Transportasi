@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi')

@section('content')
    <div id="main">
        <!-- Awal Register -->
        <section id="Register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 gambar">
                        <img src="{{ asset('template-frontend/assets/coal mining1.png') }}" alt="">
                    </div>
                    <div class="col-lg-5 col-sm-5 biodata">
                        <h2 style="text-align: center; margin-bottom: 50px; font-family: concert one;">DAFTAR BARU</h2>
                        <form action="{{ url('/web-register_store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Nama-Lengkap">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control" id="NLengkap"
                                    placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input name="email" type="email" class="form-control" id="Email"
                                    placeholder="Masukkan email">
                            </div>
                            <div class="form-group">
                                <label for="Pass">Password</label>
                                <input name="password" type="password" class="form-control" id="Pass"
                                    placeholder="******">
                            </div>
                            <div class="form-group">
                                <label for="Pass">Konfirmasi Password</label>
                                <input name="confirm_password" type="password" class="form-control" id="Konfirmasi-Pass"
                                    placeholder="******">
                            </div>
                            <div class="text-center mb-3">
                                <a href=""><button type="submit" class="btn btn-primary"
                                        style="border-radius: 50px;">DAFTAR</button></a>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 text-center mb-3">
                                <h6>Sudah punya akun? <a href="{{ url('/web-login') }}">Masuk</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Register -->
    </div>
@endsection
