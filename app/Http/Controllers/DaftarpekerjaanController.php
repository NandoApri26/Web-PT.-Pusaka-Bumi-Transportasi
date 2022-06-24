<?php

namespace App\Http\Controllers;

use App\Models\Daftarpekerjaan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Console\Application;
use Illuminate\Http\Request;

class DaftarpekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarpekerjaan = Daftarpekerjaan::all();
        return view('SDM.Daftar-Pekerjaan.index', compact('daftarpekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SDM.Daftar-Pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_pekerjaan' => 'required',
            ]
        );
        Daftarpekerjaan::create(
            [
                'nama_pekerjaan' => $request->nama_pekerjaan,
            ]
        );
        return redirect('/master-data/SDM/Daftar-Pekerjaan')->with('status', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarpekerjaan  $daftarpekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarpekerjaan $daftarpekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarpekerjaan  $daftarpekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarpekerjaan $daftarpekerjaan)
    {
        return view('SDM.Daftar-Pekerjaan.update', compact('daftarpekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarpekerjaan  $daftarpekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarpekerjaan $daftarpekerjaan)
    {
        $request->validate(
            [
                'nama_pekerjaan' => 'required',
            ]
        );
        Daftarpekerjaan::where('id', $daftarpekerjaan->id)->update(
            [
                'nama_pekerjaan' => $request->nama_pekerjaan,
            ]
        );
        return redirect('/master-data/SDM/Daftar-Pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarpekerjaan  $daftarpekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarpekerjaan $daftarpekerjaan)
    {
        Daftarpekerjaan::destroy('id', $daftarpekerjaan->id);
        return redirect('/master-data/SDM/Daftar-Pekerjaan');
    }
}
