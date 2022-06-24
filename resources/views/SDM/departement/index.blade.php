@extends('template.main')
@section('title', 'Departement')

@section('content')
    <div id="main">
        <div class="content-wrapper">
            <section class="section">
                <div class="row" id="table-striped">

                    {{-- Judul --}}
                    <div class="card-header">
                        <h2 class="card-title text-center">Data Departement</h2>
                    </div>

                    {{-- Data --}}
                    <div class="row">
                        <div class="col-7 mt-5 mb-2">
                            <a href="{{ url('/master-data/SDM/departement/create') }}" class="btn btn-primary"
                                role="button">
                                Tambah data Departement
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
                                <h4 class="card-title text-center">Data departement</h4>
                            </div>
                            <div class="card-content">
                                <!-- table striped -->
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead class="text-center font-bold">
                                            <tr>
                                                <td>No</td>
                                                <td>Departement</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($departement as $item)
                                                <tr class="text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ substr($item->departement, 0, 25) }}</td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ url('/master-data/SDM/departement/' . $item->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"><span
                                                                    class="fa-fw select-all fas"></span> </button>
                                                        </form>
                                                        <a href="{{ url('/master-data/SDM/departement/' . $item->id) . '/edit' }}"
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
