@extends('template.main')
@section('title', 'PT. Pusaka Bumi Transportasi || Daftar Pekerjaan')

@section('content')
    <div id="main">
        <div class="content-wrapper">
            <section class="section">
                <div class="row" id="table-striped">

                    {{-- Judul --}}
                    <div class="card-header">
                        <h2 class="card-title text-center">Data Daftar Pekerjaan</h2>
                    </div>

                    {{-- Data --}}
                    <div class="row">
                        <div class="col-7 mt-5 mb-2">
                            <a href="{{ url('/master-data/SDM/Daftar-Pekerjaan/create') }}" class="btn btn-primary"
                                role="button">
                                Tambah data Daftar Pekerjaan
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
                                <h4 class="card-title text-center">Data Daftar Pekerjaan</h4>
                            </div>
                            <div class="card-content">
                                <!-- table striped -->
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead class="font-bold">
                                            <tr>
                                                <td class="text-center">No</td>
                                                <td>Nama Pekerjaan</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($daftarpekerjaan as $item)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_pekerjaan }}</td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ url('/master-data/SDM/Daftar-Pekerjaan/' . $item->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"><span
                                                                    class="fa-fw select-all fas"></span> </button>
                                                        </form>
                                                        <a href="{{ url('/master-data/SDM/Daftar-Pekerjaan/' . $item->id) . '/edit' }}"
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
