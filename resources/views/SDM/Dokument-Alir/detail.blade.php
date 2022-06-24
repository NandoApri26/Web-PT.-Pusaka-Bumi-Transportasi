@extends('template.main')
@section('title', 'Detail Dokument Alir')

@section('content')
    <div id="main">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (Auth::user()->level == 'admin')
                            <h4 class="card-title">
                                <a href="{{ url('master-data/SDM/Dokument-Alir/') }}"
                                    class="btn btn-primary me-1 mb-1">Kembali</a>
                                <h2 class="text-center">Detail Dokument Alir</h2>
                            </h4>
                            <br>
                            <br>

                            <div class="d-flex">
                                <div class="row">
                                    <div class="col-12">
                                        <strong>
                                            <label for="">Nama Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->nama_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">No Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->no_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Email</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->email }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Dokument</label><br>
                                        </strong>
                                        <a href="{{ asset('dokument/' . $dokumentalir->dokument) }}"
                                            class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                            {{ substr($dokumentalir->dokument, 11, 20) }}
                                        </a><br><br>
                                        <strong>
                                            <label for="">Approved</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->approved }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Auth::user()->level == 'atasan')
                            <h4 class="card-title">
                                <a href="{{ url('master-data/SDM/Dokument-Alir-Atasan/') }}"
                                    class="btn btn-primary me-1 mb-1">Kembali</a>
                                <h2 class="text-center">Detail Dokument Alir</h2>
                            </h4>
                            <br>
                            <br>

                            <div class="d-flex">
                                <div class="row">
                                    <div class="col-12">
                                        <strong>
                                            <label for="">Nama Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->nama_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">No Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->no_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Email</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->email }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Dokument</label><br>
                                        </strong>
                                        <a href="{{ asset('dokument/' . $dokumentalir->dokument) }}"
                                            class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                            {{ substr($dokumentalir->dokument, 11, 20) }}
                                        </a><br><br>
                                        <strong>
                                            <label for="">Approved</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->approved }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Auth::user()->level == 'pegawai')
                            <h4 class="card-title">
                                <a href="{{ url('master-data/SDM/Dokument-Alir-Pegawai/') }}"
                                    class="btn btn-primary me-1 mb-1">Kembali</a>
                                <h2 class="text-center">Detail Dokument Alir</h2>
                            </h4>
                            <br>
                            <br>

                            <div class="d-flex">
                                <div class="row">
                                    <div class="col-12">
                                        <strong>
                                            <label for="">Nama Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->nama_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">No Pegawai</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->no_pegawai }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Email</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->email }}</h5>
                                        <br>
                                        <strong>
                                            <label for="">Dokument</label><br>
                                        </strong>
                                        <a href="{{ asset('dokument/' . $dokumentalir->dokument) }}"
                                            class="btn btn-primary" style="box-shadow: 3px 3px 1px grey">
                                            {{ substr($dokumentalir->dokument, 11, 20) }}
                                        </a><br><br>
                                        <strong>
                                            <label for="">Approved</label>
                                        </strong>
                                        <h5>{{ $dokumentalir->approved }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
