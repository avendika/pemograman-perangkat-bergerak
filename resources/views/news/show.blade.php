@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('news.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card">
        @if ($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" class="card-img-top" alt="Image">
        @endif
        <div class="card-body">
            <h3>{{ $news->title }}</h3>
            <p>{{ $news->description }}</p>
        </div>
    </div>
</div>
@endsection
