@extends('template.main')
@section('title', 'Edit Informasi')

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
                    <h3>Form Informasi</h3>
                    <p class="text-subtitle text-muted">PT Pusaka Bumi Transportasi</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Informasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height mt-5">
                <h3><b>Edit Informasi</b></h3>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Informasi</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ url('/master-data/informasi/' .$informasi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-2 mt-3">
                                                <label for="judulinformasi">Judul</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Judul" id="judulinformasi" name="judulinformasi" value="{{ $informasi->judul }}">
                                                </div>
                                            </div>
{{--                                             
                                            <div class="col-2 mt-3">
                                                <label for="tanggalinformasi">Tanggal</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="date" class="form-control" id="tanggalinformasi"
                                                        name="tanggalinformasi" value="{{ $informasi->tanggal }}">
                                                </div>
                                            </div> --}}

                                            <div class="col-2 mt-3">
                                                <label for="tahun">Tahun</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="tahun"
                                                        name="tahun" value="{{ $informasi->tahun }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="sluginformasi">Slug</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukkan beberapa kalimat" id="sluginformasi"
                                                        name="sluginformasi" value="{{ $informasi->slug }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="bodyinformasi">Body</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Masukan isi text" name="bodyinformasi" id="bodyinformasi" cols="30" rows="10">
                                                        {{ $informasi->body }}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="gambarinformasi">Gambar</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="gambarinformasi" name="image">
                                                    {{ $informasi->gambar }}
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                <a href="{{ url('/master-data/informasi') }}" class="btn btn-primary me-1 mb-1" role="button">Batal</a>
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