@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Jurusan</h2>
    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" name="nama" value="{{ $jurusan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi">{{ $jurusan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" name="konten" rows="5">{{ $jurusan->konten }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
