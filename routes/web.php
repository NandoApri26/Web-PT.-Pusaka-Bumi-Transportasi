<?php

// Auth Login
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthpegawaiController;
use App\Http\Controllers\AuthatasanController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SorganisasiController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\DaftarpekerjaanController;
use App\Http\Controllers\RekruitmentController;
use App\Http\Controllers\DokumentalirController;
use App\Http\Controllers\Dokumentalir_pegawaiController;
use App\Http\Controllers\FrontendController;
use App\Models\Sorganisasi;
use App\Models\Departement;
use App\Models\Mutasi;
use App\Models\Daftarpekerjaan;
use App\Models\Rekruitment;
use App\Models\Dokumentalir;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Informasi
// Route::get('/informasi', [InformasiController::class, 'index']);
// Route::get('/informasi/create',[InformasiController::class, 'create']);
// Route::post('/informasi', [InformasiController::class, 'store']);
// Route::delete('/informasi/{informasi}',[InformasiController::class, 'destroy']);
// Route::get('/informasi/{informasi}/edit', [InformasiController::class, 'edit']);
// Route::get('/informasi/{informasi}', [InformasiController::class, 'update']);


// Auth Admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_store', [AuthController::class, 'login_store']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_store', [AuthController::class, 'register_store']);
Route::get('/logout', [AuthController::class, 'logout']);


// Auth Atasan
Route::get('/login_atasan', [AuthatasanController::class, 'login'])->name('login');
Route::post('/login_store_atasan', [AuthatasanController::class, 'login_store']);
Route::get('/register_atasan', [AuthatasanController::class, 'register'])->name('register');
Route::post('/register_store_atasan', [AuthatasanController::class, 'register_store']);
Route::get('/logout_atasan', [AuthatasanController::class, 'logout']);

// Auth Pegawai
Route::get('/login_pegawai', [AuthpegawaiController::class, 'login'])->name('login');
Route::post('/login_store_pegawai', [AuthpegawaiController::class, 'login_store']);
Route::get('/register_pegawai', [AuthpegawaiController::class, 'register'])->name('register');
Route::post('/register_store_pegawai', [AuthpegawaiController::class, 'register_store']);
Route::get('/logout_pegawai', [AuthpegawaiController::class, 'logout']);

// Auth Pegawai
// Route::get('/login-', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Auth Admin
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');

// Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::prefix('/master-data')->group(function () {

        // Route::get('/admin', function () {
        //     return view('template.main');
        // });


        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::resource('/informasi', InformasiController::class);
        // Route::resource('Tentang/Struktur-Organisasi',SorganisasiController::class);
        // Route::resource('SDM/Daftar-Pekerjaan',DaftarpekerjaanController::class);
        // Route::resource('SDM/Rekruitment', RekruitmentController::class);


        // Struktur Organisasi
        Route::get('/Tentang/Struktur-Organisasi', [SorganisasiController::class, 'index']);
        Route::get('/Tentang/Struktur-Organisasi/create', [SorganisasiController::class, 'create']);
        Route::post('/Tentang/Struktur-Organisasi', [SorganisasiController::class, 'store']);
        Route::delete('/Tentang/Struktur-Organisasi/{sorganisasi}', [SorganisasiController::class, 'destroy']);
        Route::get('/Tentang/Struktur-Organisasi/{sorganisasi}/edit', [SorganisasiController::class, 'edit']);
        // Route::get('/Tentang/Struktur-Organisasi/{sorganisasi}', [SorganisasiController::class, 'update']);
        route::patch('/Tentang/Struktur-Organisasi/{sorganisasi}', [SorganisasiController::class, 'update']);

        // Struktur Departement
        Route::get('/SDM/departement', [DepartementController::class, 'index']);
        Route::get('/SDM/departement/create', [DepartementController::class, 'create']);
        Route::post('/SDM/departement', [DepartementController::class, 'store']);
        Route::delete('/SDM/departement/{departement}', [DepartementController::class, 'destroy']);
        Route::get('/SDM/departement/{departement}/edit', [DepartementController::class, 'edit']);
        // Route::get('/SDM/departement/{departement}', [DepartementController::class, 'update']);
        route::patch('/SDM/departement/{departement}', [DepartementController::class, 'update']);

        // Struktur mutasi
        Route::get('/SDM/mutasi', [MutasiController::class, 'index']);
        Route::get('/SDM/mutasi/create', [MutasiController::class, 'create']);
        Route::post('/SDM/mutasi', [MutasiController::class, 'store']);
        Route::delete('/SDM/mutasi/{mutasi}', [MutasiController::class, 'destroy']);
        Route::get('/SDM/mutasi/{mutasi}/edit', [MutasiController::class, 'edit']);
        // Route::get('/SDM/mutasi/{mutasi}', [MutasiController::class, 'update']);
        route::get('/SDM/mutasi/{mutasi}', [MutasiController::class, 'show']);
        route::patch('/SDM/mutasi/{mutasi}', [MutasiController::class, 'update']);

        // Struktur Daftar Pekerjaan
        Route::get('/SDM/Daftar-Pekerjaan', [DaftarpekerjaanController::class, 'index']);
        Route::get('/SDM/Daftar-Pekerjaan/create', [DaftarpekerjaanController::class, 'create']);
        Route::post('/SDM/Daftar-Pekerjaan', [DaftarpekerjaanController::class, 'store']);
        Route::delete('/SDM/Daftar-Pekerjaan/{daftarpekerjaan}', [DaftarpekerjaanController::class, 'destroy']);
        Route::get('/SDM/Daftar-Pekerjaan/{daftarpekerjaan}/edit', [DaftarpekerjaanController::class, 'edit']);
        // Route::get('/SDM/daftarpekerjaan/{daftarpekerjaan}', [DaftarpekerjaanController::class, 'update']);
        route::patch('/SDM/Daftar-Pekerjaan/{daftarpekerjaan}', [DaftarpekerjaanController::class, 'update']);

        // Struktur Rekruitment
        Route::get('/SDM/Rekruitment', [RekruitmentController::class, 'index']);
        Route::get('/SDM/Rekruitment/create', [RekruitmentController::class, 'create']);
        Route::post('/SDM/Rekruitment', [RekruitmentController::class, 'store']);
        Route::delete('/SDM/Rekruitment/{rekruitment}', [RekruitmentController::class, 'destroy']);
        Route::get('/SDM/Rekruitment/{rekruitment}/edit', [RekruitmentController::class, 'edit']);
        // Route::get('/SDM/Rekruitment/{Rekruitment}', [RekruitmentController::class, 'update']);
        route::get('/SDM/Rekruitment/{rekruitment}', [RekruitmentController::class, 'show']);
        Route::get('/SDM/Rekruitment/pdf/{rekruitment}', [RekruitmentController::class, 'pdf']);
        route::patch('/SDM/Rekruitment/{rekruitment}', [RekruitmentController::class, 'update']);

        // Struktur Rekruitment
        Route::get('/SDM/Dokument-Alir', [DokumentalirController::class, 'index']);
        Route::get('/SDM/Dokument-Alir/create', [DokumentalirController::class, 'create']);
        Route::post('/SDM/Dokument-Alir', [DokumentalirController::class, 'store']);
        Route::delete('/SDM/Dokument-Alir/{dokumentalir}', [DokumentalirController::class, 'destroy']);
        Route::get('/SDM/Dokument-Alir/{dokumentalir}/edit', [DokumentalirController::class, 'edit']);
        // Route::get('/SDM/Dokument-Alir/{Dokument-Alir}', [DokumentalirController::class, 'update']);
        route::get('/SDM/Dokument-Alir/{dokumentalir}', [DokumentalirController::class, 'show']);
        route::patch('/SDM/Dokument-Alir/{dokumentalir}', [DokumentalirController::class, 'update']);
    });
});

// Atasan
Route::group(['middleware' => ['authatasan', 'atasan']], function () {
    Route::prefix('/master-data')->group(function () {

        // Route::get('/admin', function () {
        //     return view('template.main');
        // });


        Route::get('/dashboard-Atasan', [DashboardController::class, 'index']);
        // Struktur Rekruitment
        Route::get('/SDM/Dokument-Alir-Atasan', [DokumentalirController::class, 'index']);
        Route::post('/SDM/Dokument-Alir-Atasan', [DokumentalirController::class, 'store']);
        Route::post('/SDM/Dokument-Alir-Atasan/{dokumentalir}', [DokumentalirController::class, 'approved']);
        Route::delete('/SDM/Dokument-Alir-Atasan/{dokumentalir}', [DokumentalirController::class, 'destroy']);
        // Route::get('/SDM/Dokument-Alir/{Dokument-Alir}', [DokumentalirController::class, 'update']);
        route::get('/SDM/Dokument-Alir-Atasan/{dokumentalir}', [DokumentalirController::class, 'show']);
    });
});

// Pegawai
Route::group(['middleware' => ['authpegawai', 'pegawai']], function () {
    Route::prefix('/master-data')->group(function () {

        // Route::get('/admin', function () {
        //     return view('template.main');
        // });


        Route::get('/dashboard-Pegawai', [DashboardController::class, 'index']);
        // Struktur Rekruitment
        Route::get('/SDM/Dokument-Alir-Pegawai', [Dokumentalir_pegawaiController::class, 'index']);
        Route::get('/SDM/Dokument-Alir-Pegawai/create', [Dokumentalir_pegawaiController::class, 'create']);
        Route::post('/SDM/Dokument-Alir-Pegawai', [Dokumentalir_pegawaiController::class, 'store']);
        Route::delete('/SDM/Dokument-Alir-Pegawai/{dokumentalir}', [Dokumentalir_pegawaiController::class, 'destroy']);
        Route::get('/SDM/Dokument-Alir-Pegawai/{dokumentalir}/edit', [Dokumentalir_pegawaiController::class, 'edit']);
        // Route::get('/SDM/Dokument-Alir-Pegawai/{Dokument-Alir-Pegawai}', [Dokumentalir_pegawaiController::class, 'update']);
        route::get('/SDM/Dokument-Alir-Pegawai/{dokumentalir}', [Dokumentalir_pegawaiController::class, 'show']);
        route::patch('/SDM/Dokument-Alir-Pegawai/{dokumentalir}', [Dokumentalir_pegawaiController::class, 'update']);
    });
});

Route::get('/landingpage', [FrontendController::class, 'landingpage']);