@extends('template.main')
@section('title', 'Detail Rekruitment')

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ url('master-data/SDM/Rekruitment/') }}"
                                class="btn btn-primary me-1 mb-1">Kembali</a>
                            <h2 class="text-center">Detail Rekruitment</h2>
                        </h4>
                        <br>
                        <br>

                        <div class="d-flex">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-7 col-xxl-7">
                                            <strong>
                                                <label for="">Nama Depan</label>
                                            </strong>
                                            <h5>{{ $rekruitment->nama_depan }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Nama Belakang</label>
                                            </strong>
                                            <h5>{{ $rekruitment->nama_belakang }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Nama Lengkap</label>
                                            </strong>
                                            <h5>{{ $rekruitment->nama_lengkap }}</h5>
                                            <br>
                                        </div>
                                        <div class="col-5 col-xl-2">
                                            <img src="{{ asset('foto/' . $rekruitment->foto) }}" width="100%"
                                                height="200px" alt="" style="object-fit: cover">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <strong>
                                                <label for="">Tempat Lahir</label>
                                            </strong>
                                            <h5>{{ $rekruitment->tempat_lahir }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Tanggal Lahir</label>
                                            </strong>
                                            <h5>{{ $rekruitment->tanggal_lahir }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Jenis Kelamin</label>
                                            </strong>
                                            <h5>{{ $rekruitment->jenis_kelamin }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Alamat</label>
                                            </strong>
                                            <h5>{{ $rekruitment->alamat }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Email</label>
                                            </strong>
                                            <h5>{{ $rekruitment->email }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">No Hp</label>
                                            </strong>
                                            <h5>{{ $rekruitment->no_hp }}</h5>
                                            <br>
                                            <strong>
                                                <label for="">Daftar Pekerjaan</label>
                                            </strong>
                                            <h5>{{ $rekruitment->daftarpekerjaan->nama_pekerjaan }}</h5>
                                            <br>
                                        </div>
                                    </div>
                                    <h4 class="text-center mt-3">BERKAS</h4>
                                    <div class="row mt-5">
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">LAMARAN KERJA</label><br><br>
                                            </strong>
                                            <a href="{{ asset('lamaran_kerja/' . $rekruitment->lamaran_kerja) }}"
                                                class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->lamaran_kerja, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">CV</label><br><br>
                                            </strong>
                                            <a href="{{ asset('cv/' . $rekruitment->cv) }}" class="btn btn-primary"
                                                style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->cv, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">KTP</label><br><br>
                                            </strong>
                                            <a href="{{ asset('ktp/' . $rekruitment->ktp) }}" class="btn btn-primary"
                                                style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->ktp, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">IJAZAH</label><br><br>
                                            </strong>
                                            <a href="{{ asset('ijazah/' . $rekruitment->ijazah) }}"
                                                class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->ijazah, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">DISNAKER</label><br><br>
                                            </strong>
                                            <a href="{{ asset('disnaker/' . $rekruitment->disnaker) }}"
                                                class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->disnaker, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                        <div class="col-6 col-lg-4 text-center">
                                            <strong>
                                                <label for="">SERTIFIKAT</label><br><br>
                                            </strong>
                                            <a href="{{ asset('sertifikat/' . $rekruitment->sertifikat) }}"
                                                class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                                {{ substr($rekruitment->sertifikat, 11, 20) }}
                                            </a><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
