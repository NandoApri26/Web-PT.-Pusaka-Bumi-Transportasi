@extends('template.main')
@section('title', 'Edit Rekruitment ')

@section('content')
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
                    <h3>Form Rekruitment</h3>
                    <p class="text-subtitle text-muted">PT Pusaka Bumi Transportasi</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/master-data/SDM/admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Rekruitment</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height mt-5">
                <h3><b>Edit Rekruitment</b></h3>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Rekruitment</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ url('/master-data/SDM/Rekruitment/' .$rekruitment->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-2 mt-3">
                                                <label for="nm_depan">Nama Depan</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Nama depan" id="nm_depan"
                                                        name="nm_depan" value="{{ $rekruitment->nama_depan }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="nm_belakang">Nama Belakang</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Nama Belakang" id="nm_belakang"
                                                        name="nm_belakang" value="{{ $rekruitment->nama_belakang }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="nm_lengkap">Nama Lengkap</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Nama Lengkap" id="nm_lengkap"
                                                        name="nm_lengkap" value="{{ $rekruitment->nama_lengkap }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="tmpt_lahir">Tempat Lahir</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Tempat Lahir" id="tmpt_lahir"
                                                        name="tmpt_lahir" value="{{ $rekruitment->tempat_lahir }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="tgl_lahir">Tanggal Lahir</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="date" class="form-control"
                                                        placeholder=" Masukkan Tanggal Lahir" id="tgl_lahir"
                                                        name="tgl_lahir" value="{{ $rekruitment->tanggal_lahir }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="radio" name="jkelamin" id="LK" value="{{ $rekruitment->jenis_kelamin }}">
                                                    <label for="LK">Laki-Laki</label>
                                                    <input type="radio" name="jkelamin" id="PR" value="{{ $rekruitment->jenis_kelamin }}"
                                                        class="ml-3">
                                                    <label for="PR">Perempuan</label>
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan alamat" id="alamat"
                                                        name="alamat" value="{{ $rekruitment->alamat }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        placeholder=" Masukkan Email" id="email" name="email" value="{{ $rekruitment->email }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="no_hp">No HP</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan No HP" id="no_hp" name="no_hp" value="{{ $rekruitment->no_hp }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="daftarpekerjaan_id">Nama Pekerjaan</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="daftarpekerjaan_id"
                                                        name="daftarpekerjaan_id" value="{{ $rekruitment->daftarpekerjaan_id }}">
                                                        <!-- using FOREIGN ID -->
                                                        @foreach ($daftarpekerjaan as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nama_pekerjaan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="lamaran_kerja">Lamaran Kerja</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control"
                                                        placeholder=" Masukkan Lamaran Kerja" id="lamaran_kerja"
                                                        name="lamaran_kerja"> {{ $rekruitment->lamaran_kerja }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="cv">CV</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="cv" name="cv"> {{ $rekruitment->cv }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="foto">Foto</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="foto" name="foto"> {{ $rekruitment->foto }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="ktp">KTP</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="ktp" name="ktp"> {{ $rekruitment->foto }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="ijazah">Ijazah</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="ijazah" name="ijazah"> {{ $rekruitment->ijazah }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="disnaker">Disnaker</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="disnaker" name="disnaker"> {{ $rekruitment->disnaker }}
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="sertifikat">Sertifikat</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="sertifikat" name="sertifikat"> {{ $rekruitment->sertifikat }}
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                <a href="{{ url('/master-data/SDM/Rekruitment') }}"
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

@endsection