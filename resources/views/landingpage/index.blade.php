@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Beranda')

@section('content')
    <div id="main">
        <!-- Awal Banner -->
        <section id="Banner">
            <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#banner-carousel" data-slide-to="1"></li>
                    <li data-target="#banner-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="bg-banner">
                            <div class="row">
                                <img src="{{ asset('template-frontend/assets/Alat Berat.jpeg') }}" alt="...">
                            </div>
                            <div class="carousel-caption  mb-5">
                                <h3>PT. Pusaka Bumi Transportasi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="bg-banner">
                            <div class="row">
                                <img src="{{ asset('template-frontend/assets/Alat Berat 3.jpeg') }}" alt="...">
                            </div>
                            <div class="carousel-caption  mb-5">
                                <h3>PT. Pusaka Bumi Transportasi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-banner">
                            <div class="row">
                                <img src="{{ asset('template-frontend/assets/8099.jpg') }}" alt="...">
                            </div>
                            <div class="carousel-caption  mb-5">
                                <h3>PT. Pusaka Bumi Transportasi</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- Akhir Banner -->

        <!-- Awal Informasi -->
        <section id="Informasi">
            <div class="container">
                <div class="row">
                    <div class="col informasi mt-5 ">
                        <h2>INFORMASI</h2>
                    </div>
                </div>
                <hr>
            </div>
            <div class="bg-Informasi">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card-group mt-4 mb-4">
                                <div class="card bg-isi mr-4">
                                    <img src="{{ asset('template-frontend/assets/8099.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h3>PTBA Pelabuhan Tarahan</h3>
                                        </a>
                                        <i class="far fa-calendar-alt mb-2"> <span>2019 - now</span></i>
                                        <h6 class="card-text">In every aspect of our operations PT SBS applies the
                                            principles of good
                                            mining practices to achieve operational excellence.... </h6>
                                    </div>
                                </div>
                                <div class="card bg-isi">
                                    <img src="{{ asset('template-frontend/assets/Alat Berat 3.jpeg') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h3>PTBA (PT Bukit Asam)</h3>
                                        </a>
                                        <i class="far fa-calendar-alt mb-2"> <span>2015 - now</span></i>
                                        <h6>In every aspect of our operations PT SBS applies the principles of good
                                            mining practices to achieve operational excellence.... </h6>
                                    </div>
                                </div>
                                <div class="card bg-isi ml-lg-4">
                                    <img src="{{ asset('template-frontend/assets/Alat Berat.jpeg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h3>Nusantara Termal Coal</h3>
                                        </a>
                                        <i class="far fa-calendar-alt mb-2"> <span>2012 - 2014</span></i>
                                        <h6>In every aspect of our operations PT SBS applies the principles of good
                                            mining practices to achieve operational excellence.... </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Informasi -->

        <!-- Awal Jumbotron -->
        <section id="Jumbotron">
            <div class="jumbotron mt-5" style="background-image: url(../template-frontend/assets/karir.jpg);">
                <div class="container Judul text-center">
                    <h3>Berkarir di PT. PUSAKA BUMI TRANSPORTASI</h3>
                    <h4>Waspada Penipuan !!!
                        <p>Rekrutmen Hanya Akan Diumumkan Melalui Situs Resmi Perusahaan & Surat Kabar Nasional</p>
                    </h4>
                    <a href="{{ url('/rekruitmentPublic') }}"><button class="btn btn-primary" type="submit">KLIK
                            DISINI UNTUK
                            PELUANG KARIR</button></a>
                </div>
            </div>
        </section>
    </div>
@endsection
