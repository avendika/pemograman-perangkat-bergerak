@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">Daftar Jurusan</h2>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary mb-3">Tambah Jurusan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jurusan as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->deskripsi }}</td>
                <td>{{ Str::limit($j->konten, 50) }}</td>
                <td>
                <a href="{{ route('jurusan.show', $j->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('jurusan.destroy', $j->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus jurusan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 
