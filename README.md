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


==================================================
== Ujicoba jalankan
php artisan route:list

== Untuk menggantikan
// Route::get('/matakuliah', [MatakuliahController::class, 'index']);

== Buat di web.php
Route::resource('matakuliah', MatakuliahController::class);

== ganti di index.php
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode MK</th>
            <th>Nama</th>
            <th>Jumlah SKS</th>
            <th>Id Prodi</th>
        </tr>
    </thead>

    <body>
        @foreach ($banyak_matakuliah as $matakuliah)
            <tr>
                <td> {{ $matakuliah['id'] }} </td>
                <td> {{ $matakuliah['kode_mk'] }} </td>
                <td> {{ $matakuliah['nama'] }} </td>
                <td> {{ $matakuliah['jumlah_sks'] }} </td>
                <td> {{ $matakuliah['prodi_id'] }} </td>
            </tr>
        @endforeach
    </body>
</table>

== tambahkan di index.php
<a href="{{ route("matakuliah.create") }}">Tambah</a>

== buat create.blade.php
<form action="{{ route("matakuliah.store") }}" method="POST">
    @csrf
    @method('POST')
    <label for="kode_mk">Kode</label>
    <input type="text" name="kode_mk">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama">
    <br>
    <label for="jumlah_sks">Jumlah SKS</label>
    <input type="text" name="jumlah_sks">
    <br>
    <label for="prodi_id">Prodi ID</label>
    <input type="text" name="prodi_id">
    <br>
    <button type="submit">Input</button>
</form>

== perhatikan MatakuliahController.php method store
