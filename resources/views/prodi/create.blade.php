@extends('template.default')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Prodi</h1>
        <a href="/prodi" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-circle-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prodi Baru</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="kode_prodi" class="form-label">Kode Prodi</label>
                    <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" aria-describedby="emailHelp">
                </div>
                <label for="nama_prodi">Nama Prodi</label>
                <input type="text" name="nama_prodi">
                <br>
                <button class="btn btn-success btn-icon-split" type="submit">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
            </form>
        </div>
    </div>
@endsection
