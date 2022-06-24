@extends('template.main')
@section('title', 'Edit Update')

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
                    <h3>Form Departement</h3>
                    <p class="text-subtitle text-muted">PT Pusaka Bumi Transportasi</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/master-data/SDM/admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Departement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height mt-5">
                <h3><b>Edit Departement</b></h3>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Departement</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ url('/master-data/SDM/mutasi/' .$mutasi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            
                                            <div class="col-2 mt-3">
                                                <label for="nama_pegawai">Nama Pegawai</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Nama Pegawai" id="nama_pegawai" name="nama_pegawai" value="{{ $mutasi->nama_pegawai }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="no_pegawai">No Pegawai</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan No Pegawai" id="no_pegawai" name="no_pegawai" value="{{ $mutasi->no_pegawai }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="tanggal_promosi">Tanggal Promosi</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Tanggal Promosi" id="tanggal_promosi" name="tanggal_promosi" value="{{ $mutasi->tanggal_promosi }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="tanggal_mutasi">Tanggal Mutasi</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Tanggal Mutasi" id="tanggal_mutasi" name="tanggal_mutasi" value="{{ $mutasi->tanggal_mutasi }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="alasan_promosi">Alasan promosi</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Alasan promosi" id="alasan_promosi" name="alasan_promosi" value="{{ $mutasi->alasan_promosi }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="alasan_mutasi">Alasan Mutasi</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Alasan Mutasi" id="alasan_mutasi" name="alasan_mutasi" value="{{ $mutasi->alasan_mutasi }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="jabatan_lama">Jabatan Lama</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Jabatan Lama" id="jabatan_lama" name="jabatan_lama" value="{{ $mutasi->jabatan_lama }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="jabatan_baru">Jabatan Baru</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Alasan Mutasi" id="jabatan_baru" name="jabatan_baru" value="{{ $mutasi->jabatan_baru }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="site_project">Site Project</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" Masukkan Site Project" id="site_project" name="site_project" value="{{ $mutasi->site_project }}">
                                                </div>
                                            </div>

                                            <div class="col-2 mt-3">
                                                <label for="departement_id">Departement</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <select class="form-control" id="departement_id" name="departement_id">
                                                        <!-- using FOREIGN ID -->
                                                    @foreach ($departement as $item)
                                                        <option value="{{$item->id}}">{{$item->departement}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                <a href="{{ url('/master-data/SDM/mutasi') }}" class="btn btn-primary me-1 mb-1" role="button">Batal</a>
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