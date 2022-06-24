<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Mutasi;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasi = Mutasi::all();
        return view('SDM.mutasi.index', compact('mutasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departement = Departement::all();
        return view('SDM.mutasi.create', compact('departement'));
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
                'nama_pegawai' => 'required',
                'no_pegawai' => 'required',
                'tgl_promosi' => 'required',
                'tgl_mutasi' => 'required',
                'alasan_promosi' => 'required',
                'alasan_mutasi' => 'required',
                'jabatan_lama' => 'required',
                'jabatan_baru' => 'required',
                'site_project' => 'required',
            ]
        );
        Mutasi::create(
            [
                'nama_pegawai' => $request->nama_pegawai,
                'no_pegawai' => $request->no_pegawai,
                'tanggal_promosi' => $request->tgl_promosi,
                'tanggal_mutasi' => $request->tgl_mutasi,
                'alasan_promosi' => $request->alasan_promosi,
                'alasan_mutasi' => $request->alasan_mutasi,
                'jabatan_lama' => $request->jabatan_lama,
                'jabatan_baru' => $request->jabatan_baru,
                'site_project' => $request->site_project,
                'departement_id' => $request->departement_id,
            ]
        );
        return redirect('/master-data/SDM/mutasi')->with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(Mutasi $mutasi)
    {
        return view('SDM.mutasi.detail', compact('mutasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutasi $mutasi)
    {
        $departement = Departement::all();
        return view('SDM.mutasi.update', compact('mutasi', 'departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutasi $mutasi)
    {
        // return $request;
        $request->validate(
            [
                'nama_pegawai' => 'required',
                'no_pegawai' => 'required',
                'tanggal_promosi' => 'required',
                'tanggal_mutasi' => 'required',
                'alasan_promosi' => 'required',
                'alasan_mutasi' => 'required',
                'jabatan_lama' => 'required',
                'jabatan_baru' => 'required',
                'site_project' => 'required',
            ]
        );
        Mutasi::where('id', $mutasi->id)->update(
            [
                'nama_pegawai' => $request->nama_pegawai,
                'no_pegawai' => $request->no_pegawai,
                'tanggal_promosi' => $request->tanggal_promosi,
                'tanggal_mutasi' => $request->tanggal_mutasi,
                'alasan_promosi' => $request->alasan_promosi,
                'alasan_mutasi' => $request->alasan_mutasi,
                'jabatan_lama' => $request->jabatan_lama,
                'jabatan_baru' => $request->jabatan_baru,
                'site_project' => $request->site_project,
            ]
        );
        return redirect('/master-data/SDM/mutasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutasi $mutasi)
    {
        Mutasi::destroy('id', $mutasi->id);
        return redirect('/master-data/SDM/mutasi');
    }
}
