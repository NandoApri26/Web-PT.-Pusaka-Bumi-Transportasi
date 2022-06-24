<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departement = Departement::all();
        return view('SDM.departement.index', compact('departement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SDM.departement.create');
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
                'departement' => 'required',
            ]
        );
        Departement::create(
            [
                'departement' => $request->departement,
            ]
        );
        return redirect('/master-data/SDM/departement')->with('status', 'Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        return view('SDM.departement.update', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        // return $request;
        $request->validate(
            [
                'departement' => 'required',
            ]
        );
        Departement::where('id', $departement->id)->update(
            [
                'departement' => $request->departement,
            ]
        );
        return redirect('/master-data/SDM/departement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        Departement::destroy('id', $departement->id);
        return redirect('/master-data/SDM/departement');
    }
}
