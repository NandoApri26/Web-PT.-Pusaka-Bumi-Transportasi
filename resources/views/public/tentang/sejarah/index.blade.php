@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Sejarah Perusahaan')


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
                                <img src="{{ url('template-frontend/assets/Alat Berat 3.jpeg') }}" alt="...">
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

        <!-- Awal Label -->
        <section id="Label">
            <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <hr>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <i class="fas fa-hard-hat"></i>
                                <li class="breadcrumb-item"><a href="{{ url('index') }}">BERANDA</a></li>
                                <li class="breadcrumb-item"><a href="#TENTANG">TENTANG</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sejarah Perusahaan</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

        <!-- Awal Sejarah Perusahaan -->
        <section id="Sejarah-Perusahaan">
            <div class="container ">
                <div class="row mt-5">
                    <div class="col Judul text-center">
                        <h2>SEJARAH PERUSAHAAN</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="bg-Sejarah-Perusahaan">
                <div class="container">
                    <div id="sejarah-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row tahun">
                                    <div class="col-4 text-center">
                                        <a href="#tahun" class="btn">1965</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#tahun" class="btn">1972</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#tahun" class="btn">2011</a>
                                    </div>
                                </div>
                                <div class="row sejarah">
                                    <div class="col-4">
                                        <h6>Pada tahun 1965, Almarhum Ibu Mutiara Fatimah Djokosoetono, dr. Chandra Suharto
                                            (putra tertua dari Ibu Mutiara Fatimah Djokosoetono) dan dr. Purnomo Prawiro
                                            (anak bungsu dari Ibu Mutiara Fatimah Djokosoetono) memulai taksi tanpa argo,
                                            Chandra Taxi, dinamai dr. Chandra Suharto </h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Pada tahun 1972, Ibu Mutiara Fatimah Djokosoetono dengan dr. Purnomo Prawiro dan
                                            dr. Chandra Suharto, bersama mitra bisnis lainnya, secara resmi memulai bisnis
                                            transportasi dengan armada 25 taksi. Sepanjang perjalanannya, Blue Bird selalu
                                            menjadi pionir dalam mengubah industri taksi di Indonesia. Inovasi tersebut
                                            antara lain tarif berbasis argometer, pembenahan seluruh armada dengan AC dan
                                            radio komunikasi. Selain itu, penggunaan sistem GPS di armada kami juga
                                            memberikan keamanan kepada pelanggan kami.</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Pada tahun 2011, Blue Bird menjadi perusahaan taksi pertama di Indonesia yang
                                            memberikan layanan reservasi mobile melalui Blackberry. Kini, Blue Bird Group
                                            telah memperluas bisnisnya lebih jauh. Selain tetap fokus pada transportasi
                                            penumpang, kami juga memperluas jangkauan kami ke bisnis lain seperti logistik,
                                            industri properti, alat berat, dan layanan konsultasi IT.</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row tahun">
                                    <div class="col-4 text-center">
                                        <a href="#" class="btn">1965</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#" class="btn">1972</a>
                                    </div>
                                    <div class="col-4 text-center">
                                        <a href="#" class="btn">2011</a>
                                    </div>
                                </div>
                                <div class="row sejarah">
                                    <div class="col-4">
                                        <h6>Pada tahun 1965, Almarhum Ibu Mutiara Fatimah Djokosoetono, dr. Chandra Suharto
                                            (putra tertua dari Ibu Mutiara Fatimah Djokosoetono) dan dr. Purnomo Prawiro
                                            (anak bungsu dari Ibu Mutiara Fatimah Djokosoetono) memulai taksi tanpa argo,
                                            Chandra Taxi, dinamai dr. Chandra Suharto </h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Pada tahun 1972, Ibu Mutiara Fatimah Djokosoetono dengan dr. Purnomo Prawiro dan
                                            dr. Chandra Suharto, bersama mitra bisnis lainnya, secara resmi memulai bisnis
                                            transportasi dengan armada 25 taksi. Sepanjang perjalanannya, Blue Bird selalu
                                            menjadi pionir dalam mengubah industri taksi di Indonesia. Inovasi tersebut
                                            antara lain tarif berbasis argometer, pembenahan seluruh armada dengan AC dan
                                            radio komunikasi. Selain itu, penggunaan sistem GPS di armada kami juga
                                            memberikan keamanan kepada pelanggan kami.</h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>Pada tahun 2011, Blue Bird menjadi perusahaan taksi pertama di Indonesia yang
                                            memberikan layanan reservasi mobile melalui Blackberry. Kini, Blue Bird Group
                                            telah memperluas bisnisnya lebih jauh. Selain tetap fokus pada transportasi
                                            penumpang, kami juga memperluas jangkauan kami ke bisnis lain seperti logistik,
                                            industri properti, alat berat, dan layanan konsultasi IT.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <a class="prev" href="#sejarah-carousel" role="button" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left"></i>
                                </a>
                                <a class="next ml-lg-5" href="#sejarah-carousel" role="button" data-slide="next">
                                    <i class="fas fa-chevron-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Sejarah Perusahaan -->

        <!-- Awal Visi -->
        <section id="Visi-Misi">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col Judul text-center">
                                <h4>VISI</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col Visi mr-lg-4 mr-4 ml-4">
                                <h6>Menjadi perusahaan yang kuat dan terpercaya yang mengutamakan kualitas untuk menjamin
                                    kesejahteraan yang berkelanjutan bagi para pemangku kepentingan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col Judul text-center">
                                <h4>MISI</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col Misi mr-lg-4 mr-4 ml-4">
                                <h6>Misi kami adalah untuk mencapai kepuasan pelanggan,
                                    dan untuk menumbuhkan dan mempertahankan diri sebagai pemimpin pasar di setiap kategori
                                    yang kami masuki. Dalam transportasi darat, kami membuktikan layanan yang andal dan
                                    berkualitas tinggi dengan penggunaan sumber daya yang efisien,
                                    dan kami melakukannya sebagai satu tim.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Visi -->

        <!-- Awal Struktur Organisasi -->
        <section id="Struktur-Organisasi">
            <div class="container ">
                <div class="row mt-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 image mt-5">
                        <img src="{{ asset('template-frontend/assets/Struktur.png') }}" alt="">
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!-- Akhir Struktur Organisasi -->
    </div>
@endsection
