php artisan make:migration create_matakuliah_table

Isi migration

php artisan migrate

==================================================

php artisan make:migration modify_dosen_add_gaji

Isi migration-nya

php artisan migrate


==================================================
-- Terminal/Command Prompt
php artisan make:model Matakuliah

-- app/Models/Matakuliah.php
protected $table = "matakuliah";
protected $guarded = [];

-- Terminal/Command Prompt
php artisan make:seeder MatakuliahSeeder
Matakuliah::create([
            'kode_mk' => "ABC123",
            'nama' => 'Tuwaga',
            'jumlah_sks' => 3,
            'prodi_id' => 1,
        ]);

-- DatabaseSeeder.php
$this->call(MatakuliahSeeder::class);

-- Pilihan: Terminal/Command Prompt
php artisan db:seed
php artisan db:seed --class=MatakuliahSeeder
php artisan migrate:fresh --seed

