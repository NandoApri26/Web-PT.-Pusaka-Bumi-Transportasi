<?php

namespace App\Http\Controllers;

use App\Models\Dokumentalir;
use Illuminate\Http\Request;

class Dokumentalir_pegawaiController extends Controller
{

    public function index()
    {
        $dokumentalir = Dokumentalir::all();
        return view('SDM.Dokument-Alir.index', compact('dokumentalir'));
    }

    public function create()
    {
        return view('SDM.Dokument-Alir.create');
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
        return redirect('/master-data/SDM/Dokument-Alir-Pegawai')->with('status', 'Berhasil ditambah');
    }

    public function show(Dokumentalir $dokumentalir)
    {
        return view('SDM.Dokument-Alir.detail', compact('dokumentalir'));
    }

    public function edit(Dokumentalir $dokumentalir)
    {
        return view('SDM.Dokument-Alir.update', compact('dokumentalir'));
    }
}