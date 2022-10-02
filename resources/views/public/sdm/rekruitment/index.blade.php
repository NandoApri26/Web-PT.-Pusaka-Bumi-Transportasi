@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi')

@section('content')
    <div id="main">

        <!-- Awal Jumbotron -->
        <section id="Rekruitment-Jumbotron">
            <div class="jumbotron mt-5" style="background-image: url(./../template-frontend/assets/karir.jpg);">
                <div class="container Judul text-center">
                    <h3>KARIR <br>
                        PT. PUSAKA BUMI TRANSPORTASI
                    </h3>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- Awal Label -->
        <section id="Label">
            <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <hr>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <i class="fas fa-hard-hat"></i>
                                <li class="breadcrumb-item"><a href="{{ url('/index') }}">BERANDA</a></li>
                                <li class="breadcrumb-item"><a href="#TENTANG">TENTANG</a></li>
                                <li class="breadcrumb-item active" aria-current="page">REKRUITMENT</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

        <!-- Awal Daftar -->
        <section id="Daftar">
            <div class="row">
                <div class="container">
                    <div class="col-xl-7 col-8 ml-auto mt-5 mb-xl-3 mb-5">
                        <a href="{{ url('./pendaftaran') }}"><button class="btn btn-primary">DAFTAR SEKARANG</button></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Daftar -->

        <!-- Awal Menut Rekruitment-->
        <section id="Rekruitment-User">
            <div class="container">
                <div class="bg-Rekruitment ml-3 ml-sm-12 mt-sm-5">
                    <div class="row">
                        <div class="col Text ml-lg-5 ml-sm-5 mr-lg-5 mr-sm-5 mb-lg-2 mb-sm-2">
                            <div class="container">
                                <h4>PT. Pusaka Bumi Transportasi</h4>
                                <h5>Mohon Perhatian!!!</h5>
                                <p>PT. Pusaka Bumi Transportasi tidak pernah meminta biaya apapun selama proses rekruitment
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Menut Rekruitment-->
    </div>
@endsection
