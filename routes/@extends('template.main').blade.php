@extends('template.main')
@section('title', 'Edit Petugas')

@section('main')
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
                    <h3>Form Edit</h3>
                    <p class="text-subtitle text-muted">PT Pertamina Patra Niaga Regional Sumbagsel</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <h3><b>Edit Petugas Baru</b></h3>
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Petugas</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ url('/Tentang/Struktur-Organisasi/' .$sorganisasi->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control @error('namaorganisasi') is-invalid @enderror" placeholder="Masukkan Nama officer" id="first-name-icon" name="namaorganisasi" value="{{$sorganisasi->nama}}">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-person"></i>
                                                        </div>
                                                        @error('namaorganisasi')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 mt-3">
                                                <label for="jabatanorganisasi">Jabatan</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="jabatanorganisasi"
                                                        name="jabatanorganisasi" placeholder="Masukkan Jabatan" value="{{ $sorganisasi->jabatan }}">
                                                </div>
                                            </div><div class="col-2 mt-3">
                                                <label for="gambarorganisasi">Gambar</label>
                                            </div>
                                            <div class="col-10 mt-3">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" id="gambarorganisasi" name="image">
                                                    {{ $sorganisasi->gambar }}
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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



<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('informasis', function (Blueprint $table) {
            $table->string('tahun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('informasis', function (Blueprint $table) {
            $table->dropColumn('tahun');
        });
    }
};

