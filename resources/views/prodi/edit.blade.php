Edit Data
<br>
<form action="{{ route("matakuliah.update", $matakuliah) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="kode_mk">Kode</label>
    <input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}">
    <br>
    <label for="nama">Nama</label>
    <input type="text" name="nama"  value="{{ $matakuliah->nama }}">
    <br>
    <label for="jumlah_sks">Jumlah SKS</label>
    <input type="text" name="jumlah_sks"  value="{{ $matakuliah->jumlah_sks }}">
    <br>
    <label for="prodi_id">Prodi ID</label>
    <input type="text" name="prodi_id"  value="{{ $matakuliah->prodi_id }}">
    <br>
    <button type="submit">Input</button>
</form>
