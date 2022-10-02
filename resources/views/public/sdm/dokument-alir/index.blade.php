@extends('template-web.main')
@section('title', 'PT. Pusakan Bumi Transportasi')

@section('content')
    <div id="main">


        <!-- Awal Jumbotron -->
        <section id="Rekruitment-Jumbotron">
            <div class="jumbotron mt-5" style="background-image: url(./../template-frontend/assets/Dokument.jpeg);">
                <div class="container Judul text-center">
                    <h3>DOKUMENT ALIR <br>
                        PT. PUSAKA BUMI TRANSPORTASI
                    </h3>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->

        <!-- Awal Label -->
        @if (session('status'))
            <div class="row mt-2">
                <div class="col">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
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
                                <li class="breadcrumb-item active" aria-current="page">DOKUMENT ALIR</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

        <!-- Awal Menut Dokument-Alir-->
        <section id="Dokument-Alir">
            <div class="container">
                <div class="bg-Dokument-Alir ml-3 ml-sm-3 mt-sm-5">
                    <div class="row">
                        <div class="col Text ">
                            <div class="container">
                                <h5>Perhatian</h5>
                                <p>Hanya pegawai PT. Pusaka Bumi Transportasi yang dapat mengakses halaman ini</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5 form-Dokument">
                        <div class="container">
                            <form action="{{ url('/dokumentPublic') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label for="NamaLengkap">Nama Lengkap</label>
                                    <input name="nm_pegawai" type="text" class="form-control" id="NamaLengkap"
                                        placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nopegawai">No Pegawai</label>
                                    <input name="no_pegawai" type="text" class="form-control" id="Email"
                                        placeholder=" No Pegawai Anda">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="Email">Email</label>
                                    <input name="email" type="email" class="form-control" id="Email"
                                        placeholder=" Email Anda">
                                </div>
                                <input type="hidden" class="form-control" placeholder=" Masukkan Approved" id="approved"
                                    name="approved" value="tidak setuju">
                                <label for="Dokumen">Upload Dokument</label>
                                <div class="input-group" style="border: 2px solid; border-color: black; border-radius: 5px">
                                    <div class="custom-file">
                                        <input name="dokument" type="file" class="custom-file-input" id="Dokumen"
                                            required>
                                        <label class="custom-file-label" for="Dokumen">Choose
                                            file...</label>
                                    </div>
                                </div>
                                <a href=""><button class="btn btn-primary mt-3" type="submit">KIRIM</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Menut Dokument-Alir-->


    </div>
@endsection
