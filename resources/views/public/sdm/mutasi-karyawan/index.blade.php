@extends('template-web.main')
@section('title', 'PT. Pusaka Bumi Transportasi')

@section('content')
    <div id="main">

        <!-- Awal Jumbotron Mutasi -->
        <section id="Jumbotron-Mutasi">
            <div class="jumbotron mt-5" style="background-image: url(./../template-frontend/assets/mutasi.png);">
                <div class="container Judul">
                    <h3>Daftar Mutasi Karyawan <br>
                        PT. PUSAKA BUMI TRANSPORTASI</h3>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron Mutasi -->

        <!-- Awal Label -->
        <section id="Label">
            <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <hr>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <i class="fas fa-hard-hat"></i>
                                <li class="breadcrumb-item"><a href="index.html">BERANDA</a></li>
                                <li class="breadcrumb-item"><a href="#TENTANG">TENTANG</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MUTASI KARYAWAN</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

        <!-- Awal Tabel Murasi Karyawan -->
        <section id="Table-Mutasi">
            <div class="container ">
                <div class="row mt-5">
                    <div class="col Judul text-center">
                        <h2>DAFTAR NAMA MUTASI KARYAWAN</h2>
                        <hr style="border:0.8px; border-style: solid; color:#2a96ce; margin-top: -5px;" width="530px">
                    </div>
                </div>
            </div>
            <div class="bg-Table">
                <div class="container tb-container">
                    <div class="row mt-3">
                        <div class="col-12 tb-fixed">
                            <table class="table table-sm table-striped table-condensed mt-4 mb-4">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">JABATAN LAMA</th>
                                        <th scope="col">JABATAN BARU</th>
                                        <th scope="col">SITE PROJECT</th>
                                        <th scope="col">DEPARTEMENT</th>
                                        {{-- <th scope="col">AKSI</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($mutasi as $item)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_pegawai }}</td>
                                        <td>{{ $item->jabatan_lama }}</td>
                                        <td>{{ $item->jabatan_baru }}</td>
                                        <td>{{ $item->site_project }}</td>
                                        <td>{{ $item->departement->departement }}</td>
                                        {{-- <td>
                                            <a href="{{ url('/mutasiPublic/detail/' . $item->id) }}"><button
                                                    class="btn btn-success">Detail</button></a>
                                        </td> --}}
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir STabel Murasi Karyawan -->
    </div>
@endsection
