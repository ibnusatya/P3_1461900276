<?php
namespace App\Http\Controllers;
use App\Models\dokter;
use App\Models\pasien;
use App\Models\kamar;
use App\Models\user;
use Illuminate\Http\Request;
class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = dokter::all();
        $kamar = kamar::all();
        $pasien = pasien::all();
        $user = user::all();
        return view('data0258', [
            'kamar'  => $kamar,
            'pasien' => $pasien,
            'dokter' => $dokter,
            'user'   => $user
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_tambah');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        pasien::create([
            'id' => $request-> id_pasien,
            'nama' => $request-> nama_pasien,
            'alamat' => $request-> alamat_pasien
        ]);
        return redirect('data0258');
    }

    /**
@@ -71,7 +76,10 @@ public function show($id)
     */
    public function edit($id)
    {
        //
        $pasien = pasien::find($id);
        return view('data_edit0258', [
            'pasien' => $pasien
        ]);
    }

    /**
@@ -83,7 +91,13 @@ public function edit($id)
     */
    public function update(Request $request, $id)
    {
        //
        $pasien = pasien::find($id);
        $pasien->id = $request->id_pasien;
        $pasien->nama = $request->nama_pasien;
        $pasien->alamat = $request->alamat_pasien;
        $pasien->save();

        return redirect('data0258');
    }

    /**
@@ -94,6 +108,9 @@ public function update(Request $request, $id)
     */
    public function destroy($id)
    {
        //
        $pasien = pasien::find($id);
        $pasien->delete();

        return redirect('data0258');
    }
}