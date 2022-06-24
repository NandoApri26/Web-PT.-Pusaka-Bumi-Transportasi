<style>
    .logo-pbt img {
        width: auto;
        height: auto;
        max-width: 100%;
        max-height: 100%;
        margin-top: 10px;
    }

    #myDiv {
        display: none;
        text-align: center;

    }
</style>
{{-- Admin --}}
@if (Auth::user()->level == 'admin')
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="logo-pbt">
                    <div class="container">
                        <a href="{{ url('/master-data/dashboard') }}"><img
                                src="{{ asset('template/assets/images/logo/logo.png') }}" alt="Logo"
                                srcset=""></a>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="col text-center">
                            <h6>PT. Pusaka Bumi Transportasi</h6>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  @if (Request::segment(2) == 'dashboard') active @endif ">
                            <a href="{{ url('/master-data/dashboard/') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  @if (Request::segment(2) == 'informasi') active @endif">
                            <a href="{{ url('/master-data/informasi/') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Informasi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub @if (Request::segment(2) == 'Tentang') active @endif">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Tentang</span>
                            </a>
                            <ul class="submenu @if (Request::segment(2) == 'Struktur-Organisasi') active @endif">
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/Tentang/Struktur-Organisasi/') }}">
                                        <span class="fa-fw select-all fas"></span>
                                        <span>Struktur Organisasi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub @if (Request::segment(2) == 'SDM') active @endif">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>SDM</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/SDM/departement') }}"><span
                                            class="fa-fw select-all fas"></span> Departement</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/SDM/mutasi') }}"><span
                                            class="fa-fw select-all fas"></span> Mutasi</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/SDM/Daftar-Pekerjaan') }}"><span
                                            class="fa-fw select-all fas"></span> Daftar Pekerjaan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/SDM/Rekruitment') }}"><span
                                            class="fa-fw select-all fas"></span> Rekruitment</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/master-data/SDM/Dokument-Alir') }}"><span
                                            class="fa-fw select-all fas"></span> Dokument Alir</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  @if (Request::segment(2) == 'Logout') active @endif">
                            <a href="{{ url('/logout') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
    </div>
@endif

{{-- Awatasan --}}
@if (Auth::user()->level == 'atasan')
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="logo-pbt">
                    <div class="container">
                        <a href="{{ url('/master-data/dashboard-Atasan') }}"><img
                                src="{{ asset('template/assets/images/logo/logo.png') }}" alt="Logo"
                                srcset=""></a>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="col text-center">
                            <h6>PT. Pusaka Bumi Transportasi</h6>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  @if (Request::segment(2) == 'dashboard-Atasan') active @endif ">
                            <a href="{{ url('/master-data/dashboard-Atasan/') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  @if (Request::segment(2) == 'SDM') active @endif">
                            <a href="{{ url('/master-data/SDM/Dokument-Alir-Atasan') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Dokument Alir</span>
                            </a>
                        </li>
                        <li class="sidebar-item  @if (Request::segment(2) == 'informasi') active @endif">
                            <a href="{{ url('/logout_atasan') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
    </div>
@endif

{{-- Pegawai --}}
@if (Auth::user()->level == 'pegawai')
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="logo-pbt">
                    <div class="container">
                        <a href="{{ url('/master-data/dashboard-Pegawai') }}"><img
                                src="{{ asset('template/assets/images/logo/logo.png') }}" alt="Logo"
                                srcset=""></a>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="col text-center">
                            <h6>PT. Pusaka Bumi Transportasi</h6>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  @if (Request::segment(2) == 'dashboard-Pegawai') active @endif ">
                            <a href="{{ url('/master-data/dashboard-Pegawai/') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  @if (Request::segment(2) == 'SDM') active @endif">
                            <a href="{{ url('/master-data/SDM/Dokument-Alir-Pegawai') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Dokument Alir</span>
                            </a>
                        </li>
                        <li class="sidebar-item  @if (Request::segment(2) == 'informasi') active @endif">
                            <a href="{{ url('/logout_pegawai') }}" class='sidebar-link'>
                                <span class="fa-fw select-all fas"></span>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
    </div>
@endif
