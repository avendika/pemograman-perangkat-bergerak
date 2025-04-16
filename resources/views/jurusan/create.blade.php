@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Jurusan</h2>
    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi"></textarea>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" name="konten" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
