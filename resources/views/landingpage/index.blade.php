<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBT || BERANDA</title>

    <link rel="Icon" href="{{ asset('template-frontend/assets/logo.png') }}" type="image/x-icon">

    <!-- Panggil CSS -->
    <link rel="stylesheet" href="{{ asset('template-frontend/assets/css/style.css') }}">
    <!-- Panggil Bootsrap -->
    <link rel="stylesheet" href="{{ asset('template-frontend/assets/css/bootstrap.css') }}">
    <!-- Panggil Icon -->
    <script src="https://kit.fontawesome.com/3d647cac5e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Awal Navbar -->
    <section id="Header">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img
                            src="{{ url('template-frontend/assets/Logo_PBT-removebg-preview.png') }}" width="150px"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link js-scroll-trigger mr-3" href="index.html">BERANDA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle js-scroll-trigger mr-3" href="#Tentang"
                                    id="navabr-menu" role="button" data-toggle="dropdown" aria-expanded="false">
                                    TENTANG
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navabr-menu">
                                    <a class="dropdown-item" href="sejarah-perusahaan.html">SEJARAH PERUSAHAAN</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="tujuan-gcg.html">GCG</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle js-scroll-trigger mr-3" href="#" id="navabr-menu"
                                    role="button" data-toggle="dropdown" aria-expanded="false">
                                    SDM
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navabr-menu">
                                    <a class="dropdown-item" href="mutasi-karyawan.html">MUTASI KARYAWAN</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="rekruitment.html">REKRUITMENT</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="dokument.html">DOKUMEN ALIR</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger mr-3" href="kontak.html">HUBUNGI KAMI</a>
                            </li>
                            <a href="login.html"><button class="btn btn-primary">LOGOUT</button></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- Akhir Navbar -->

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
                            <img src="{{ url('template-frontend/assets/Alat Berat.jpeg') }}" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h3>PT. Pusaka Bumi Transportasi</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-banner">
                        <div class="row">
                            <img src="{{ url('template-frontend/assets/Alat Berat 3.jpeg') }}" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h3>PT. Pusaka Bumi Transportasi</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-banner">
                        <div class="row">
                            <img src="{{ url('template-frontend/assets/8099.jpg') }}" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block mb-5">
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
                            @foreach ($informasi as $item)
                                <div class="card bg-isi mr-2 ml-2">
                                    {{-- <img src="{{ url('template-frontend/assets/8099.jpg') }}" class="card-img-top" alt="..."> --}}
                                    <img src="{{ asset('img/' . $item->gambar) }}" alt="">
                                    <div class="card-body">
                                        <a href="">
                                            <h3 class="card-title">{{ $item->judul }}</h3>
                                        </a>
                                        <i class="far fa-calendar-alt mb-2"> <span>{{ $item->tahun }}</span></i>
                                        <h6 class="card-text">{{ $item->slug }}</h6>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="card bg-isi">
                                <img src="{{ url('template-frontend/assets/Alat Berat 3.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h3>PTBA (PT Bukit Asam)</h3>
                                    </a>
                                    <i class="far fa-calendar-alt mb-2"> <span>2015 - now</span></i>
                                    <h6>In every aspect of our operations PT SBS applies the principles of good
                                        mining practices to achieve operational excellence.... </h6>
                                </div>
                            </div>
                            <div class="card bg-isi ml-4">
                                <img src="{{ url('template-frontend/assets/Alat Berat.jpeg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h3>Nusantara Termal Coal</h3>
                                    </a>
                                    <i class="far fa-calendar-alt mb-2"> <span>2012 - 2014</span></i>
                                    <h6>In every aspect of our operations PT SBS applies the principles of good
                                        mining practices to achieve operational excellence.... </h6>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Informasi -->

    <!-- Awal Jumbotron -->
    <section id="Jumbotron">
        <div class="jumbotron mt-5" style="background-image: url(template-frontend/assets/karir.jpg);">
            <div class="container Judul text-center">
                <h3 class="display-4">Berkarir di PT. PUSAKA BUMI TRANSPORTASI</h3>
                <h4>Waspada Penipuan !!!
                    <p>Rekrutmen Hanya Akan Diumumkan Melalui Situs Resmi Perusahaan & Surat Kabar Nasional</p>
                </h4>
                <a class="btn btn-primary btn-lg" href="{{ url('template-frontend/user/rekruitment.html') }}"
                    role="button">KLIK DISINI UNTUK PELUANG KARIR</a>
            </div>
        </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Awal Footer -->
    <section id="Footer">
        <div class="bg-footer mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 mt-5 sitemap">
                        <div class="container">
                            <h4>SITEMAP</h4>
                            <ul>
                                <li><a href="">TENTANG</a></li>
                                <li><a href="">KARIR</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5  Hubungi-Kami">
                        <div class="container">
                            <h4>HUBUNGI KAMI</h4>
                            <ul class="address-info">
                                <li><i class="fas fa-map-marker-alt"></i>
                                    <p>Jl. Pramuka IV No. 105 Kel. Pasar II Muara Enim, Sumatera Selatan 31315 Indonesia
                                    </p>
                                </li>
                                <li><i class="fas fa-phone-alt"></i>
                                    <p>+ (62) 711 245 780</p>
                                </li>
                                <li><i class="fas fa-envelope"></i>
                                    <p>corsec@pbt.co.id</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 text-center copyright">
                        Copyright 2022 <i class="far fa-copyright"></i> <span>Apriando Pratama</span> All Right Reserved
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4 mb-3 ml-auto sosmed text-center">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="3"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Footer -->

    <script src="{{ url('template-frontend/js/jquery.slim.min.js') }}"></script>
    <script src="{{ url('template-frontend/js/bootstrap.min.js') }}"></script>
</body>

</html>
