<?php

namespace App\Http\Controllers;

use App\Models\Sorganisasi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Console\Application;
use Illuminate\Http\Request;


class SorganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorganisasi = Sorganisasi::all();
        return view('Tentang.Struktur-Organisasi.index', compact('sorganisasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $sorganisasi = Sorganisasi::all();
        return view('Tentang.Struktur-Organisasi.create');
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
                'namaorganisasi' => 'required',
                'jabatanorganisasi' => 'required',
                'image' => 'required',
            ]
        );
        $img = $request->file('image'); //mengambil file dari form
        $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        Sorganisasi::create(
            [
                'nama' => $request->namaorganisasi,
                'jabatan' => $request->jabatanorganisasi,
                'gambar' => $filename
            ]
        );
        return redirect('/master-data/Tentang/Struktur-Organisasi') -> with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sorganisasi  $sorganisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sorganisasi $sorganisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sorganisasi  $sorganisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sorganisasi $sorganisasi)
    {
        // $sorganisasi = Sorganisasi::all();
        return view('Tentang.Struktur-Organisasi.update', compact('sorganisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sorganisasi  $sorganisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sorganisasi $sorganisasi)
    {
        // return $request;
        $request->validate(
            [
                'namaorganisasi' => 'required',
                'jabatanorganisasi' => 'required',
                'image' => 'required'
            ]
        );

        if ($request->image != null) {
            $img = $request->file('image'); //mengambil dari form
            $filename = time() . "_" .$img->getClientOriginalName();
            $img->move('img', $filename);
            Sorganisasi::where('id', $sorganisasi->id)->update(
                [
                    'nama' => $request->namaorganisasi,
                    'jabatan' => $request->jabatanorganisasi,
                    'gambar' => $filename,
                ]
            );
        } else {
            Sorganisasi::where('id', $sorganisasi->id)->update(
                [
                    'nama' => $request->namaorganisasi,
                    'jabatan' => $request->jabatanorganisasi,
                ]
            );
        }
        return redirect('/master-data/Tentang/Struktur-Organisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sorganisasi  $sorganisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sorganisasi $sorganisasi)
    {
        //untuk aksi delete
        Sorganisasi::destroy('id', $sorganisasi->id);
        return redirect('/master-data/Tentang/Struktur-Organisasi');
    }
}
