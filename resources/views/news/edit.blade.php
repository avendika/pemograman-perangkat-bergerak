@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>

    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $news->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar (opsional)</label>
            <input type="file" name="image" class="form-control">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" class="mt-2" width="200">
            @endif
        </div>

        <div class="form-group">
            <label for="link">Link Detail</label>
            <input type="text" name="link" id="link" class="form-control" value="{{ $news->link }}" placeholder="Masukkan link detail">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
