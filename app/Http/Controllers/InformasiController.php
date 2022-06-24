<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Console\Application;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $informasis = Informasi::all();
        return view('informasi.create');
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
                'judulinformasi' => 'required',
                'tahun' => 'required',
                'sluginformasi' => 'required',
                'bodyinformasi' => 'required',
                'image' => 'required',
            ]
        );

        $img = $request->file('image'); //mengambil file dari form
        $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel


        Informasi::create(
            [
                // kiri nama tabel->nama form
                'judul' => $request->judulinformasi,
                'tahun' => $request->tahun,
                'slug' => $request->sluginformasi,
                'body' => $request->bodyinformasi,
                'gambar' => $filename,
            ]
        );

        return redirect('/master-data/informasi')->with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {

        return view('informasi.update', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        // return $request;
        $request->validate(
            [
                'judulinformasi' => 'required',
                'tahun' => 'required',
                'sluginformasi' => 'required',
                'bodyinformasi' => 'required',
                'image' => 'required',
                
            ]
        );

        if ($request->image != null) {
            $img = $request->file('image'); //mengambil dari form
            $filename = time() . "_" .$img->getClientOriginalName();
            $img->move('img', $filename);
            Informasi::where('id', $informasi->id)->update(
                [
                    'judul' => $request->judulinformasi,
                    'tahun' => $request->tahun,
                    'slug' => $request->sluginformasi,
                    'body' => $request->bodyinformasi,
                    'gambar' => $filename,
                    
                ]
            );
        } else {
            Informasi::where('id', $informasi->id)->update(
                [
                    'judul' => $request->judulinformasi,
                    'tahun' => $request->tahun,
                    'slug' => $request->sluginformasi,
                    'body' => $request->bodyinformasi,

                ]
            );
        }
        return redirect('/master-data/informasi');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy('id', $informasi->id);
        return redirect('/master-data/informasi');
    }
}
