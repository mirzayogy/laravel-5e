<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::create([
            'kode_prodi' => "P001",
            'nama_prodi' => 'Sistem Informasi',
        ]);
        Prodi::create([
            'kode_prodi' => "P002",
            'nama_prodi' => 'Teknik Informatika',
        ]);
    }
}
