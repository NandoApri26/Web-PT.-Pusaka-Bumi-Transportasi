@extends('template.main')
@section('title', 'Dokument Alir')

@section('content')
    <div id="main">
        <div class="content-wrapper">
            <section class="section">
                <div class="row" id="table-striped">

                    {{-- Judul --}}
                    <div class="card-header">
                        <h2 class="card-title text-center"> Data Dokument Alir</h2>
                    </div>

                    {{-- Section Admin --}}
                    @if (Auth::user()->level == 'admin')
                        {{-- Tambah Data --}}
                        <div class="row">
                            <div class="col-7 mt-5 mb-2">
                                <a href="{{ url('/master-data/SDM/Dokument-Alir/create') }}" class="btn btn-primary"
                                    role="button">
                                    Tambah data Struktur
                                </a>
                            </div>
                        </div>

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

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Data Dokument Alir</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead class="font-bold">
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Pegawi</td>
                                                    <td>No Pegawai</td>
                                                    <td>Email</td>
                                                    <td>Dokument</td>
                                                    <td>Approved</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dokumentalir as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ substr($item->nama_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->no_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->email, 0, 15) }}</td>
                                                        <td>{{ substr($item->dokument, 11, 25) }}</td>
                                                        <td>{{ $item->approved }}</td>
                                                        <td>
                                                            <a href="{{ url('/master-data/SDM/Dokument-Alir/' . $item->id) }}"
                                                                class="btn btn-info"><span
                                                                    class="fa-fw select-all fas"></span>
                                                            </a>
                                                            <form method="POST"
                                                                action="{{ url('/master-data/SDM/Dokument-Alir/' . $item->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger"><span
                                                                        class="fa-fw select-all fas"></span></button>
                                                            </form>
                                                            <a href="{{ url('/master-data/SDM/Dokument-Alir/' . $item->id) . '/edit' }}"
                                                                class="btn btn-warning"><span
                                                                    class="fa-fw select-all fas"></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Section Atasan --}}
                    @if (Auth::user()->level == 'atasan')
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Data Dokument Alir</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead class="font-bold">
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Pegawi</td>
                                                    <td>No Pegawai</td>
                                                    <td>Email</td>
                                                    <td>Dokument</td>
                                                    <td>Approved</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dokumentalir as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ substr($item->nama_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->no_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->email, 0, 15) }}</td>
                                                        <td>{{ substr($item->dokument, 11, 25) }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ url('/master-data/SDM/Dokument-Alir-Atasan/' . $item->id) }}">
                                                                @csrf
                                                                @if ($item->approved == 'belum disetujui')
                                                                    <button class="btn btn-danger"
                                                                        onclick="this.innerHTML='Setuju'" type="submit"
                                                                        value="setuju" name="approved">Belum disetujui
                                                                    </button>
                                                                @endif
                                                                @if ($item->approved == 'setuju')
                                                                    <button class="btn btn-success"
                                                                        onclick="this.innerHTML='Setuju'" type="submit"
                                                                        value="belum disetujui" name="approved">Setuju
                                                                    </button>
                                                                @endif
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('/master-data/SDM/Dokument-Alir-Atasan/' . $item->id) }}"
                                                                class="btn btn-info"><span
                                                                    class="fa-fw select-all fas"></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Section Pegawai --}}
                    @if (Auth::user()->level == 'pegawai')
                        {{-- Tambah Data --}}
                        <div class="row">
                            <div class="col-7 mt-5 mb-2">
                                <a href="{{ url('/master-data/SDM/Dokument-Alir-Pegawai/create') }}"
                                    class="btn btn-primary" role="button">
                                    Tambah data Struktur
                                </a>
                            </div>
                        </div>

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

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Data Dokument Alir</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead class="font-bold">
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Pegawi</td>
                                                    <td>No Pegawai</td>
                                                    <td>Email</td>
                                                    <td>Dokument</td>
                                                    <td>Approved</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($dokumentalir as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ substr($item->nama_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->no_pegawai, 0, 15) }}</td>
                                                        <td>{{ substr($item->email, 0, 15) }}</td>
                                                        <td>{{ substr($item->dokument, 11, 25) }}</td>
                                                        <td>{{ $item->approved }}</td>
                                                        <td>
                                                            <a href="{{ url('/master-data/SDM/Dokument-Alir-Pegawai/' . $item->id) }}"
                                                                class="btn btn-info"><span
                                                                    class="fa-fw select-all fas"></span>
                                                            </a>
                                                            {{-- <form method="POST"
                                                                action="{{ url('/master-data/SDM/Dokument-Alir-Pegawai/' . $item->id) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger"><span
                                                                        class="fa-fw select-all fas"></span></button>
                                                            </form>
                                                            <a href="{{ url('/master-data/SDM/Dokument-Alir-Pegawai/' . $item->id) . '/edit' }}"
                                                                class="btn btn-warning"><span
                                                                    class="fa-fw select-all fas"></span>
                                                            </a> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </div>
    </div>
@endsection
