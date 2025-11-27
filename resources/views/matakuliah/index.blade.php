@extends('template.default')
@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Matakuliah</h1>
        <a href="#" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a>
    </div>

    <br>
    @if (session('berhasil'))
        {{ session('berhasil') }}
        <br>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode MK</th>
                <th>Nama</th>
                <th>Jumlah SKS</th>
                <th>Id Prodi</th>
                <th>Opsi</th>
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
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah) }}">
                            Ubah
                        </a>
                        <a href="#" onclick="konfirmasi('{{ route('matakuliah.destroy', $matakuliah) }}')">
                            Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>
    <form action="" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
    <script>
        function konfirmasi(href) {
            if (confirm('Hapus?')) {
                document.getElementById('deleteForm').action = href
                document.getElementById('deleteForm').submit()
            }
        }
    </script>
@endsection
