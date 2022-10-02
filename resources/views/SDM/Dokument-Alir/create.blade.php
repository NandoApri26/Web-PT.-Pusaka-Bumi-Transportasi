@extends('template.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Create Dokument Alir')

@section('content')
    {{-- Level Admin --}}
    @if (Auth::user()->level == 'admin')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Form Dokument Alir</h3>
                            <p class="text-subtitle text-muted">PT Pusaka Bumi Transportasi</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/master-data/SDM/admin') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Dokument Alir</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height mt-5">
                        <h3><b>Tambah Dokument Alir</b></h3>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Dokument Alir</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal"
                                            action="{{ url('/master-data/SDM/Dokument-Alir') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-2 mt-3">
                                                        <label for="nm_pegawai">Nama Pegawai</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder=" Masukkan Nama pegawai" id="nm_pegawai"
                                                                name="nm_pegawai">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="no_pegawai">No Pegawai</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder=" Masukkan No Pegawai" id="no_pegawai"
                                                                name="no_pegawai">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="email">Email</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder=" Masukkan Email" id="email" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="dokument">Dokument</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                placeholder=" Masukkan Dokument" id="dokument"
                                                                name="dokument">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="approved" hidden>Approved</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control"
                                                                placeholder=" Masukkan Approved" id="approved"
                                                                name="approved" value="belum disetujui">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Kirim</button>
                                                        <a href="{{ url('/master-data/SDM/Dokument-Alir') }}"
                                                            class="btn btn-primary me-1 mb-1" role="button">
                                                            Batal
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
        </div>
    @endif

    {{-- Level Admin --}}
    @if (Auth::user()->level == 'pegawai')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Form Dokument Alir</h3>
                            <p class="text-subtitle text-muted">PT Pusaka Bumi Transportasi</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ url('/master-data/SDM/dashboard-Pegawai') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Dokument Alir</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height mt-5">
                        <h3><b>Tambah Dokument Alir</b></h3>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Dokument Alir</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal"
                                            action="{{ url('/master-data/SDM/Dokument-Alir-Pegawai') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-2 mt-3">
                                                        <label for="nm_pegawai">Nama Pegawai</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder=" Masukkan Nama pegawai" id="nm_pegawai"
                                                                name="nm_pegawai">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="no_pegawai">No Pegawai</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder=" Masukkan No Pegawai" id="no_pegawai"
                                                                name="no_pegawai">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="email">Email</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder=" Masukkan Email" id="email"
                                                                name="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="dokument">Dokument</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                placeholder=" Masukkan Dokument" id="dokument"
                                                                name="dokument">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 mt-3">
                                                        <label for="approved" hidden>Approved</label>
                                                    </div>
                                                    <div class="col-10 mt-3">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control"
                                                                placeholder=" Masukkan Approved" id="approved"
                                                                name="approved" value="belum disetujui">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Kirim</button>
                                                        <a href="{{ url('/master-data/SDM/Dokument-Alir-Pegawai') }}"
                                                            class="btn btn-primary me-1 mb-1" role="button">
                                                            Batal
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->
            </div>
        </div>
    @endif

@endsection
