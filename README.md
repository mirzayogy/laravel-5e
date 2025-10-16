php artisan make:migration create_matakuliah_table

Isi migration

php artisan migrate

==================================================

php artisan make:migration modify_dosen_add_gaji

Isi migration-nya

php artisan migrate


==================================================

php artisan make:model Matakuliah

protected $table = "matakuliah";
protected $guarded = [];

php artisan make:seeder MatakuliahSeeder
Matakuliah::create([
            'kode_mk' => "ABC123",
            'nama' => 'Tuwaga',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);

php artisan migrate:fresh --seed

$this->call(MatakuliahSeeder::class);
