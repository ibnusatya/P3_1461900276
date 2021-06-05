<?php

namespace App\Http\Controllers;

use App\Models\kamar0276;
use Illuminate\Http\Request;

class KamarController0276 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamarjoin = kamar0276::select('*','kamar.id AS idKamar','pasien.id AS idPasien', 'pasien.nama AS namaPasien', 'dokter.id AS idDokter', 'dokter.nama AS namaDokter')->join('pasien', 'pasien.id', 'kamar.id_pasien')->join('dokter', 'dokter.id', 'kamar.id_dokter')->get();
        return view('kamar0276', ['datakamarjoin'=> $kamarjoin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamarTambah0276');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kamar0276::create([
            'id' => $request->id_kamar,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter
        ]);

        return redirect('kamar0276');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $kamar = kamar0276::select('kamar.id AS idKamar','pasien.id AS idPasien', 'pasien.nama AS namaPasien', 'dokter.id AS idDokter', 'dokter.nama AS namaDokter')->join('pasien', 'pasien.id', 'kamar.id_pasien')->join('dokter', 'dokter.id', 'kamar.id_dokter')->find($id);
        return view('kamarEdit0276', ['datakamaredit'=> $kamar]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $kamar = kamar0276::find($id);
        $kamar->id = $request->id_kamar;
        $kamar->id_pasien = $request->id_pasien;
        $kamar->id_dokter = $request->id_dokter;
        $kamar->save();

        return redirect('kamar0276');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = kamar0276::find($id);
        $kamar->delete();

        return redirect('kamar0276');
    }
}