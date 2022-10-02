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
                                <li class="breadcrumb-item"><a href="index.html">BERANDA</a></li>
                                <li class="breadcrumb-item"><a href="#TENTANG">TENTANG</a></li>
                                <li class="breadcrumb-item"><a href="#TENTANG">REKRUITMENT</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PENDAFTARAN</li>
                            </ol>
                        </nav>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Label -->

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

        <!-- Awal Pendaftaran -->
        <section id="Pendaftaran">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 form-pendaftaran">
                        <div class="container">
                            <form action="{{ url('/pendaftaran') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="NamaDepan">Nama Depan</label>
                                        <input name="nm_depan" type="text" class="form-control" id="NamaDepan"
                                            placeholder="Masukkan nama depan">
                                    </div>
                                    <div class="col">
                                        <label for="NamaBelakang">Nama Belakang</label>
                                        <input name="nm_belakang" type="text" class="form-control" id="NamaBelakang"
                                            placeholder="Masukkan nama belakang">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="NamaLengkap">Nama Lengkap</label>
                                    <input name="nm_lengkap" type="text" class="form-control" id="NamaLengkap"
                                        placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="TempaLahir">Tempat Lahir</label>
                                    <input name="tmpt_lahir" type="text" class="form-control" id="TempaLahir"
                                        placeholder=" Tempat Lahir Anda">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="TanggalLahir">Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" id="TanggalLahir"
                                        placeholder="Masukkan nama lengkap">
                                </div>
                                <label>Jenis Kelamin</label><br>
                                <input type="radio" name="jkelamin" id="LK" value="Laki-Laki">
                                <label for="LK">Laki-Laki</label>
                                <input type="radio" name="jkelamin" id="PR" value="Perempuan" class="ml-3">
                                <label for="PR">Perempuan</label>
                                <div class="form-group mt-3">
                                    <label for="Alamat">ALamat</label>
                                    <textarea name="alamat" class="form-control" id="Alamat" placeholder="Masukkan alamat sekarang"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="Email">Email</label>
                                    <input name="email" type="email" class="form-control" id="Email"
                                        placeholder="Masukkan email">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="NoHP">No HandPhone</label>
                                    <input name="no_hp" type="number" class="form-control" id="NoHP"
                                        placeholder="081234567891">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="Email">Pilih Pekerjaan</label>
                                    <select class="form-control" id="daftarpekerjaan_id" name="daftarpekerjaan_id">
                                        <!-- using FOREIGN ID -->
                                        @foreach ($daftarpekerjaan as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nama_pekerjaan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label>Upload Berkas Pribadi</label><br>
                                <label for="lamaran_kerja">Surat Lamaran Kerja</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan Lamaran Kerja"
                                        id="lamaran_kerja" name="lamaran_kerja">
                                </div>
                                <label for="cv">CV</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan CV" id="cv"
                                        name="cv">
                                </div>
                                <label for="foto">Foto</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan foto"
                                        id="foto" name="foto">
                                </div>
                                <label for="ktp">KTP</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan KTP"
                                        id="ktp" name="ktp">
                                </div>
                                <label for="ijazah">Ijazah</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan ijazah"
                                        id="ijazah" name="ijazah">
                                </div>
                                <label for="disnaker">Disnaker</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan disnaker"
                                        id="disnaker" name="disnaker">
                                </div>
                                <label for="sertifikat">Sertifikat</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" placeholder=" Masukkan Sertifikat"
                                        id="sertifikat" name="sertifikat">
                                </div>
                                <a href=""><button class="btn btn-primary mt-3" type="submit">KIRIM</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Pemdaftaran -->
    </div>
@endsection
