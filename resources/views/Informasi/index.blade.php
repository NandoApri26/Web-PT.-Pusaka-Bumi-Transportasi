@extends('template.main')
@section('title', 'Informasi')

@section('content')
    <div id="main">
        <div class="content-wrapper">
            <section class="section">
                <div class="row" id="table-striped">

                    {{-- Judul --}}
                    <div class="card-header">
                        <h2 class="card-title text-center">Tambah Data Informasi</h2>
                    </div>

                    {{-- Tambah Data --}}
                    <div class="row">
                        <div class="col-7 mt-5 mb-2">
                            <a href="{{ url('/master-data/informasi/create') }}" class="btn btn-primary" role="button">
                                Tambah data Informasi
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
                                <h4 class="card-title text-center">Data Informasi</h4>
                            </div>
                            <div class="card-content">
                                <!-- table striped -->
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead class="font-bold">
                                            <tr>
                                                <td>No</td>
                                                <td>Judul</td>
                                                {{-- <td>Tanggal</td> --}}
                                                <td>Tahun</td>
                                                <td>Slug</td>
                                                <td>Body</td>
                                                <td>Gambar</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($informasi as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ substr($item->judul, 0, 25) }}</td>
                                                    {{-- <td>{{ $item->tanggal }}</td> --}}
                                                    <td>{{ $item->tahun }}</td>
                                                    <td>{{ substr($item->slug, 0, 35) }}</td>
                                                    <td>{{ substr($item->body, 0, 60) }}</td>
                                                    <td><img src="{{ asset('img/' . $item->gambar) }}"
                                                            alt="{{ $item->gambar }}" width="50">
                                                    </td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ url('/master-data/Informasi/' . $item->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"><span
                                                                    class="fa-fw select-all fas"></span></button>
                                                        </form>
                                                        <a href="{{ url('/master-data/Informasi/' . $item->id) . '/edit' }}"
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
                </div>
            </section>
        </div>
    </div>
@endsection
