<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::create([
            'kode_mk' => "ABC123",
            'nama' => 'Tuwaga',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);
        Matakuliah::create([
            'kode_mk' => "ABC124",
            'nama' => 'Tuwagapat',
            'jumlah_sks' => 2,
            'prodi_id' => 1,
        ]);
    }
}
