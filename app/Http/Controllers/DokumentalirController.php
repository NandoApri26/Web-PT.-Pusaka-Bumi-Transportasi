<?php

namespace App\Http\Controllers;

use App\Models\Dokumentalir;
use Illuminate\Http\Request;

class DokumentalirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumentalir = Dokumentalir::all();
        return view('SDM.Dokument-Alir.index', compact('dokumentalir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SDM.Dokument-Alir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function approved(Request $request, Dokumentalir $dokumentalir)
    {
        // return $request;
        $request->validate(
            [
                'approved' => 'required'
            ]
        );
        Dokumentalir::where('id', $dokumentalir->id)->update(
            [
                'approved' => $request->approved,
            ]
        );
        return redirect('/master-data/SDM/Dokument-Alir-Atasan');
    }

    public function store(Request $request)
    {
        // return $request;
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
        return redirect('/master-data/SDM/Dokument-Alir')->with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokumentalir  $dokumentalir
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumentalir $dokumentalir)
    {
        return view('SDM.Dokument-Alir.detail', compact('dokumentalir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumentalir  $dokumentalir
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumentalir $dokumentalir)
    {
        return view('SDM.Dokument-Alir.update', compact('dokumentalir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokumentalir  $dokumentalir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokumentalir $dokumentalir)
    {
        $request->validate(
            [
                'nm_pegawai' => 'required',
                'no_pegawai' => 'required',
                'email' => 'required',
                'dokument' => 'required',
                'approved' => 'required',
            ]
        );

        if ($request->dokument != null) {
            $dokument = $request->file('dokument');
            $filename = time() . "-" . $dokument->getClientOriginalName();
            $dokument->move('dokument', $filename);
            Dokumentalir::where('id', $dokumentalir->id)->update(
                [
                    'nama_pegawai' => $request->nm_pegawai,
                    'no_pegawai' => $request->no_pegawai,
                    'email' => $request->email,
                    'dokument' => $filename,
                    'approved' => $request->approved,
                ]
            );
        } else {
            Dokumentalir::where('id', $dokumentalir->id)->update(
                [
                    'nama_pegawai' => $request->nm_pegawai,
                    'no_pegawai' => $request->no_pegawai,
                    'email' => $request->email,
                    'approved' => $request->approved,
                ]
            );
        }
        return redirect('/master-data/SDM/Dokument-Alir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumentalir  $dokumentalir
     * @return \Illuminate\Http\Response
     */

    public function destroy(Dokumentalir $dokumentalir)
    {
        Dokumentalir::destroy('id', $dokumentalir->id);
        return redirect('/master-data/SDM/Dokument-Alir');
    }
}