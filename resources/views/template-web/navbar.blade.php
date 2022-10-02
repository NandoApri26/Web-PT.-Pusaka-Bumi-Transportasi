<!-- Awal Navbar -->
<section id="Header">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/index') }}"><img
                        src="{{ url('template-frontend/assets/Logo_PBT-removebg-preview.png') }}" width="150px"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link js-scroll-trigger mr-3" href="{{ url('/index') }}">BERANDA</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle js-scroll-trigger mr-3" href="#Tentang" id="navabr-menu"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                TENTANG
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navabr-menu">
                                <a class="dropdown-item" href="{{ url('/sejarah') }}">SEJARAH PERUSAHAAN</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/gcg') }}">GCG</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle js-scroll-trigger mr-3" href="#" id="navabr-menu"
                                role="button" data-toggle="dropdown" aria-expanded="false">
                                SDM
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navabr-menu">
                                <a class="dropdown-item" href="{{ url('/mutasiPublic') }}">MUTASI KARYAWAN</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/rekruitmentPublic') }}">REKRUITMENT</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/dokumentPublic') }}">DOKUMEN ALIR</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger mr-3" href="{{ url('/kontak') }}">HUBUNGI KAMI</a>
                        </li>
                        @if (Auth::check('umum'))
                            <div class="login">
                                <a href="{{ url('/web-logout') }}" class="btn btn-primary">Logout</a>
                            </div>
                        @else
                            <div class="login">
                                <a href="{{ url('/web-login') }}" class="btn btn-primary">Login</a>
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
<!-- Akhir Navbar -->
