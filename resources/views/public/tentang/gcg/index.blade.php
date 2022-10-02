@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Tujuan GCG')

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
                                <li class="breadcrumb-item active" aria-current="page">Good Corporate Governance</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

        <!-- Awal Informasi -->
        <section id="Tujuan-GCG">
            <div class="container">
                <div class="row">
                    <div class="col Judul mt-5">
                        <h2>TUJUAN IMPLEMENTASI GCG</h2>
                        <hr style="border:0.8px; border-style: solid; color:#2a96ce; margin-top: -5px;" width="390px"
                            align="left">
                    </div>
                </div>
            </div>
            <div class="bg-GCG mt-3">
                <div class="container">
                    <div class=" d-flex flex-row Isi-GCG text-center">
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/Kompas.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/Grafik.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/koneksi.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/tanda seru.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                    </div>
                    <div class="d-flex flex-row Isi-GCG text-center">
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/Pesawat kertas.png') }}" width="100px"
                                alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/OK.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/shield_icon_125161.png') }}" width="100px"
                                alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                        <div class="col-lg-3 col-3 mt-3 ">
                            <img src="{{ asset('template-frontend/assets/bintang.png') }}" width="100px" alt="">
                            <h6>Mengendalikan dan mengarahkan
                                hubungan antara Pemegang Saham</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Informasi -->

        <!-- Awal Kosep GCG -->
        <section id="Konsep-GCG">
            <div class="bg-Konsep-GCG mt-5">
                <div class="container Isi-Konsep">
                    <div class="row">
                        <div class="col">
                            <h5>Untuk mencapai tujuan tersebut, Perseroan berupaya menerapkan prinsip-prinsip dasar tata
                                kelola yang baik, mencakup asas transparansi, akuntabilitas, responsibilitas, independensi
                                dan kewajaran secara konsekuen di setiap kegiatan operasionalnya. Adapun bentuk komitmen
                                nyata Perseroan terhadap penerapan prinsip-prinsip GCG adalah sebagai berikut :</h5>
                            <br>
                            <h4>TRANSPARANSI</h4>
                            <ul style="margin-left: -20px;">
                                <li>Prinsip transparansi adalah keterbukaan dalam melaksanakan proses pengambilan keputusan
                                    dan keterbukaan dalam mengemukakan informasi materiil dan relevan mengenai Perseroan.
                                </li>
                                <li>Perseroan mematuhi Peraturan Perundang-undangan yang mengatur masalah keterbukaan
                                    informasi yang berlaku bagi Perseroan. </li>
                                <li>Transparansi juga mencakup hal-hal yang relevan dengan informasi yang dibutuhkan oleh
                                    publik berkaitan dengan produk, jasa, dan aktivitas operasional Perseroan yang secara
                                    potensial dapat mempengaruhi perilaku Stakeholders</li>
                            </ul>
                            <h4>AKUNTABILITAS</h4>
                            <h5>Perseroan menerapkan prinsip akuntabilitas sebagai salah satu cara untuk mengatasi persoalan
                                yang timbul karena adanya pembagian tugas (segregation of duties) antar Organ Perseroan
                                serta mengurangi dampak dari ogency problem yang timbul akibat perbedaan kepentingan antara
                                Direksi, Pemegang Saham dan Stakeholders, Perseroan mengakui adanya 3 (tiga) tingkatan
                                akuntabilitas, yaitu: </h5>
                            <ul style="margin-left: -20px;">
                                <li>Akuntabilitas Individual, Akuntabilitas Individual merujuk kepada hubungan akuntabilitas
                                    dalam konteks atasan-bawahan. Akuntabilitas berlaku kepada kedua belah pihak baik yang
                                    mempunyai wewenang dan yang mendapatkan penugasan dari Pemegang Wewenang.</li>
                                <li>Akuntabilitas Tim, Akuntabilitas Tim merujuk kepada adanya akuntabilitas yang ditanggung
                                    Bersama oleh suatu kelompok kerja atas kondisi dari kinerja yang tercapai.</li>
                                <li>Akuntabilitas Korporasi, Akuntabilitas Korporasi merujuk pada akuntabilitas Perseroan
                                    dalam menjalankan perannya sebagai entitas bisnis. Dalam hal ini Perseroan bertanggung
                                    jawab atas aktivitas yang dilakukannya.</li>
                            </ul>
                            <h4>RESPOSIBILITAS</h4>
                            <ul style="margin-left: -20px;">
                                <li>Prinsip tanggung jawab adalah kesesuaian dalam pengelolaan Perusahaan dengan peraturan
                                    perundang-undangan yang berlaku, prinsip-prinsip korporasi yang sehat, dan
                                    prinsip-prinsip GCG.</li>
                                <li>Perseroan dalam menjalankan kegiatan usaha akan menjunjung tinggi etika bisnis dalam
                                    memenuhi kewajiban kepada pemangku kepentingan sesuai dengan hukum yang berlaku,
                                    menghargai budaya masyarakat sekitar tempat Perseroan melakukan kegiatan usaha, dan
                                    memiliki keinginan yang kuat untuk memberikan kontribusi nyata kepada masyarakat.</li>
                            </ul>
                            <h4>INDEPENDENSI</h4>
                            <ul style="margin-left: -20px;">
                                <li>Prinsip independensi adalah keadaan dimana Perusahaan dikelola secara profesional tanpa
                                    benturan kepentingan atau pengaruh/tekanan dari pihak manapun yang tidak sesuai dengan
                                    peraturan perundang-undangan yang berlaku dan prinsip-prinsip korporasi yang sehat.</li>
                                <li>Perseroan meyakini bahwa independensi adalah wajib agar Organ Perseroan dapat berfungsi
                                    dengan baik sehingga mampu mengambil keputusan yang baik bagi Perseroan.</li>
                                <li>Setiap Organ Perusahaan tetap menjalankan tugasnya sesuai dengan peraturan
                                    perundang-undangan yang berlaku dan prinsip-prinsip GCG.</li>
                            </ul>
                            <h4>KEWAJARAN</h4>
                            <ul style="margin-left: -20px;">
                                <li>Prinsip kewajaran adalah keadilan dan kesetaraan di dalam memenuhi hak-hak yang timbul
                                    berdasarkan perjanjian dan peraturan perundang-undangan yang berlaku.</li>
                                <li>Perseroan menjamin perlindungan hak-hak para Pemegang Saham dan Stakeholders yang
                                    senantiasa akan mendapatkan perlakuan yang setara tanpa diskriminasi sesuai dengan
                                    peraturan perundangundangan yang berlaku.</li>
                                <li>Perseroan akan selalu mengupayakan agar pihak-pihak yang berkepentingan dapat memahami
                                    hak dan kewajibannya sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Kosep GCG -->

        <!-- Awal Landasan Hukum -->
        <section id="Landasan-Hukum">
            <div class="container">
                <div class="row mt-5">
                    <div class="col Judul">
                        <h2>LANDASAN HUKUM</h2>
                        <hr style="border:0.8px; border-style: solid; color:#2a96ce; margin-top: -5px;" width="255px"
                            align="left">
                    </div>
                </div>
            </div>
            <div class="bg-Landasan-Hukum">
                <div class="container">
                    <div class="row">
                        <div class="col Isi-Landasan">
                            <ol style="margin-left: -20px; margin-top: 10px;">
                                <li>Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi
                                    Publik;</li>
                                <li>Undang-Undang Republik Indonesia Nomor 11 Tahun 2008 tentang Informasi dan Transaksi
                                    Elektronik; </li>
                                <li>Undang-Undang Republik Indonesia No. 40 Tahun 2007 tentang Perseroan Terbatas.</li>
                                <li>Anggaran Dasar Perseroan terakhir yang telah disahkan melalui Akta No. 34 tanggal 12
                                    Juli 2017 oleh Notaris Affiroh, SH., yang berkedudukan di Muara Enim, Palembang,
                                    Sumatera Selatan.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Landasan Hukum -->

        <!-- Awal Struktur GCG -->
        <section id="Struktur-GCG">
            <div class="container">
                <div class="row mt-5">
                    <div class="col Judul">
                        <h2>STRUKTUR GCG</h2>
                        <hr style="border:0.8px; border-style: solid; color:#2a96ce; margin-top: -5px;" width="205px"
                            align="left">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-3">
                    <div class="col Struktur">
                        <img src="{{ asset('template-frontend/assets/Struktur GCG.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Struktur GCG -->
    </div>
@endsection
