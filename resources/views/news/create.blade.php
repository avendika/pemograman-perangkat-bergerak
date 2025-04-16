@extends('layouts.app')

@section('content')
<div class="content-container">
    <h3>Tambah Berita Baru</h3>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="link">Link Detail</label>
            <input type="text" name="link" id="link" class="form-control" placeholder="Masukkan link detail">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
