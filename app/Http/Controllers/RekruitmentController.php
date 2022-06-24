<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;

use App\Models\Daftarpekerjaan;
use App\Models\Rekruitment;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class RekruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekruitment = Rekruitment::all();
        return view('SDM.Rekruitment.index', compact('rekruitment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daftarpekerjaan = Daftarpekerjaan::all();
        return view('SDM.Rekruitment.create', compact('daftarpekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect('/master-data/SDM/Rekruitment')->with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekruitment  $rekruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Rekruitment $rekruitment)
    {
        return view('SDM.Rekruitment.detail', compact('rekruitment'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekruitment  $rekruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Rekruitment $rekruitment)
    {
        $daftarpekerjaan = Daftarpekerjaan::all();
        return view('SDM.Rekruitment.update', compact('rekruitment', 'daftarpekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekruitment  $rekruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rekruitment $rekruitment)
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
                'ktp' => 'required',
                'ijazah' => 'required',
                'disnaker' => 'required',
            ]
        );

        if ($request->file != null) {
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

            Rekruitment::where('id', $rekruitment->id)->update(
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
                ]
            );
        } else {
            Rekruitment::where('id', $rekruitment->id)->update(
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
                ]
            );
        }
        return redirect('/master-data/SDM/Rekruitment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekruitment  $rekruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rekruitment $rekruitment)
    {
        Rekruitment::destroy('id', $rekruitment->id);
        return redirect('/master-data/SDM/Rekruitment');
    }
}