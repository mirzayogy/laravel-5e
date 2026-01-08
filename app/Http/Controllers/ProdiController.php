<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banyak_prodi = Prodi::all();
        // dd($banyak_prodi);
        return view(
            'prodi.index',
            [
                'banyak_prodi' => $banyak_prodi
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tervalidasi = $request->validate([
            'kode_prodi' => 'required|unique:prodi',
            'nama_prodi' => 'required',
        ]);

        Prodi::create($data_tervalidasi);

        return redirect("/prodi")->with('berhasil', 'Berhasil Tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
