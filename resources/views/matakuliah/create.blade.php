Create Data
<br>
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
