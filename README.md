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

==================================================
-- Pilihan:
php artisan make:controller MatakuliahController //kosongan
php artisan make:controller MatakuliahController --resource //sudah ada perintahnya

-- routes/web.php
Route::get('/matakuliah', [MatakuliahController::class, 'index']);

-- MatakuliahController
public function index()
{
    $banyak_matakuliah = Matakuliah::all();
    // dd($banyak_matakuliah); // untuk melihat isi datanya
    return view('matakuliah.index',
        [
            'banyak_matakuliah' => $banyak_matakuliah
        ]
    );
}
