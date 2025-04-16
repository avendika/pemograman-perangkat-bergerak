@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Berita</h2>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">+ Tambah Berita</a>

    @foreach ($newsList as $news)
        <div class="card mb-4">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="Image">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $news->title }}</h5>
                <p class="card-text">{{ Str::limit($news->description, 100) }}</p>
                <a href="{{ $news->link }}" class="btn btn-info" target="_blank">Lihat Detail</a>
                <a href="{{ route('news.edit', $news->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus berita ini?')">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
