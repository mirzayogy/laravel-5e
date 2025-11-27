@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Matakuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success btn-icon-split">
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
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <a href="{{ route('matakuliah.edit', $matakuliah) }}"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>
                                    <a href="#"
                                        onclick="konfirmasi('{{ route('matakuliah.destroy', $matakuliah) }}')"
                                        class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
    </div>
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

@push('styles')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }} " rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endpush
