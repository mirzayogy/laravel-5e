<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banyak_matakuliah = Matakuliah::all();
        // dd($banyak_matakuliah);
        return view(
            'matakuliah.index',
            [
                'banyak_matakuliah' => $banyak_matakuliah
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tervalidasi = $request->validate([
            'kode_mk' => 'required|unique:matakuliah',
            'nama' => 'required',
            'jumlah_sks' => 'required',
            'prodi_id' => 'required',
        ]);

        Matakuliah::create($data_tervalidasi);

        return redirect("/matakuliah")->with('berhasil', 'Berhasil Tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
        return view(
            'matakuliah.edit',
            [
                "matakuliah" => $matakuliah
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama' => 'required',
            'jumlah_sks' => 'required',
            'prodi_id' => 'required',
        ]);

        $matakuliah->update([
            'kode_mk' => $request->kode_mk,
            'nama' => $request->nama,
            'jumlah_sks' => $request->jumlah_sks,
            'prodi_id' => $request->prodi_id,
        ]);

        return redirect("/matakuliah")->with('berhasil', 'Berhasil Ubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect("/matakuliah")->with('berhasil', 'Berhasil Hapus data');
    }
}
