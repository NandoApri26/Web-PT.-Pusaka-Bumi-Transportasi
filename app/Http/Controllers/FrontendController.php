<?php

namespace App\Http\Controllers;

use App\Models\Daftarpekerjaan;
use App\Models\Informasi;
use App\Models\Mutasi;
use App\Models\User;
use App\Models\Rekruitment;
use App\Models\Dokumentalir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function login()
    {
        return view('Auth-Public.login');
    }
    public function register()
    {
        return view('Auth-Public.register');
    }
    public function register_store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|alpha_num',
                'confirm_password' => 'required|same:password|min:8|max:10',

            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'umum'
        ]);
        // Alert::success('Berhasil', 'Pendaftaran Berhasil');
        return redirect('/web-login');
    }
    public function login_store(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect('/web-login')->with('status', 'Email atau Password salah');
        } else {
            return redirect('/index');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/web-login');
    }
    public function index()
    {
        $informasi = Informasi::all();
        return view('landingpage.index', compact('informasi'));
    }

    public function sejarah()
    {
        return view('public.tentang.sejarah.index');
    }

    public function gcg()
    {
        return view('public.tentang.gcg.index');
    }

    public function mutasiPublic()
    {
        $mutasi = Mutasi::all();
        return view('public.sdm.mutasi-karyawan.index', compact('mutasi'));
    }
    public function DetailMutasiPublic(Mutasi $mutasi)
    {

        return view('public.sdm.mutasi-karyawan.detail', compact('mutasi'));
    }

    public function rekruitmentPublic()
    {
        return view('public.sdm.rekruitment.index');
    }

    public function pendaftaran()
    {
        $daftarpekerjaan = Daftarpekerjaan::all();
        return view('public.sdm.rekruitment.pendaftaran', compact('daftarpekerjaan'));
    }

    public function CreatePendaftaran(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'nm_depan' => 'required',
                'nm_belakang' => 'required',
                'nm_lengkap' => 'required',
                'tmpt_lahir' => 'required',
                'tgl_lahir' => 'required',
                'jkelamin' => 'required',
                'alamat' => 'required',
                'email' => 'required',
                'no_hp' => 'required',
                'lamaran_kerja' => 'required',
                'cv' => 'required',
                'foto' => 'required',
                'ijazah' => 'required',
                'ktp' => 'required',
                'disnaker' => 'required',
            ]
        );

        // Lamaran Kerja
        $file_lk = $request->file('lamaran_kerja');
        $filename_lk = time() . "-" . $file_lk->getClientOriginalName();
        $file_lk->move('lamaran_kerja', $filename_lk);

        // CV
        $file_cv = $request->file('cv');
        $filename_cv = time() . "-" . $file_cv->getClientOriginalName();
        $file_cv->move('cv', $filename_cv);

        // Foto
        $file_foto = $request->file('foto');
        $filename_foto = time() . "-" . $file_foto->getClientOriginalName();
        $file_foto->move('foto', $filename_foto);

        // KTP
        $file_ktp = $request->file('ktp');
        $filename_ktp = time() . "-" . $file_ktp->getClientOriginalName();
        $file_ktp->move('ktp', $filename_ktp);

        // IJAZAH
        $file_ijazah = $request->file('ijazah');
        $filename_ijazah = time() . "-" . $file_ijazah->getClientOriginalName();
        $file_ijazah->move('ijazah', $filename_ijazah);

        // DISNAKER
        $file_disnaker = $request->file('disnaker');
        $filename_disnaker = time() . "-" . $file_disnaker->getClientOriginalName();
        $file_disnaker->move('disnaker', $filename_disnaker);

        // SERTIFIKAT
        $file_sertifikat = $request->file('sertifikat');
        $filename_sertifikat = time() . "-" . $file_sertifikat->getClientOriginalName();
        $file_sertifikat->move('sertifikat', $filename_sertifikat);

        Rekruitment::create(
            [
                'nama_depan' => $request->nm_depan,
                'nama_belakang' => $request->nm_belakang,
                'nama_lengkap' => $request->nm_lengkap,
                'tempat_lahir' => $request->tmpt_lahir,
                'tanggal_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jkelamin,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'lamaran_kerja' => $filename_lk,
                'cv' => $filename_cv,
                'foto' => $filename_foto,
                'ktp' => $filename_ktp,
                'ijazah' => $filename_ijazah,
                'disnaker' => $filename_disnaker,
                'sertifikat' => $filename_sertifikat,
                'daftarpekerjaan_id' => $request->daftarpekerjaan_id,
            ]
        );
        return redirect('/pendaftaran')->with('status', 'Berhasil ditambah');
    }

    public function dokumentPublic()
    {
        return view('public.sdm.dokument-alir.index');
    }
    public function CreateDokumentPublic(Request $request)
    {
        //    return $request;
        $request->validate(
            [
                'nm_pegawai' => 'required',
                'no_pegawai' => 'required',
                'email' => 'required',
                'dokument' => 'required',
            ]
        );
        $file_dokument = $request->file('dokument');
        $filename_dokument = time() . "-" . $file_dokument->getClientOriginalName();
        $file_dokument->move('dokument', $filename_dokument);

        Dokumentalir::create(
            [
                'nama_pegawai' => $request->nm_pegawai,
                'no_pegawai' => $request->no_pegawai,
                'email' => $request->email,
                'dokument' => $filename_dokument,
                'approved' => $request->approved,
            ]
        );
        return redirect('/dokumentPublic')->with('status', 'Dokumen telah terkirim');
    }

    public function kontak()
    {
        return view('public.kontak.index');
    }
}