@extends('template.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Detail Mutasi')

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ url('master-data/SDM/mutasi/') }}" class="btn btn-primary me-1 mb-1">Kembali</a>
                            <h2 class="text-center">Detail Mutasi</h2>
                        </h4>
                        <br>
                        <br>

                        <div class="d-flex">
                            <div class="row">
                                <div class="col">
                                    <label for="">Nama</label>
                                    <h5>{{ $mutasi->nama_pegawai }}</h5>
                                    <br>
                                    <label for="">No Pegawai</label>
                                    <h5>{{ $mutasi->no_pegawai }}</h5>
                                    <br>
                                    <label for="">Tanggal Promosi</label>
                                    <h5>{{ $mutasi->tanggal_promosi }}</h5>
                                    <br>
                                    <label for="">Tanggal Mutasi</label>
                                    <h5>{{ $mutasi->tanggal_mutasi }}</h5>
                                    <br>
                                    <label for="">Alasan Promosi</label>
                                    <h5>{{ $mutasi->alasan_promosi }}</h5>
                                    <br>
                                    <label for="">Alasan Mutasi</label>
                                    <h5>{{ $mutasi->alasan_mutasi }}</h5>
                                    <br>
                                    <label for="">Jabatan Lama</label>
                                    <h5>{{ $mutasi->jabatan_lama }}</h5>
                                    <br>
                                    <label for="">Jabatan Baru</label>
                                    <h5>{{ $mutasi->jabatan_baru }}</h5>
                                    <br>
                                    <label for="">Departement</label>
                                    <h5>{{ $mutasi->departement->departement }}</h5>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
