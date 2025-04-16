<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Temu Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #FF7517;
        }
        .navbar-brand {
            color: white;
            font-weight: bold;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            background: #dcdcdc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-google {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            background: white;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-google img {
            width: 20px;
            margin-right: 10px;
        }
        .btn-warning {
            background-color: #FF7517 !important;
            border-color: #FF7517 !important;
        }
        .btn-warning:hover {
            background-color: #e66916 !important;
            border-color: #e66916 !important;
        }
        .text-danger {
            color: #FF7517 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/Logo.png') }}">
                Temu Jurusan
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="register-container">
            <h3 class="register-title">Daftar</h3>

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap anda" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password anda" required>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Password anda" required>
    </div>
    <button type="submit" class="btn btn-warning w-100">Daftar</button>
</form>

            <div class="text-center mt-3">
                <span>Sudah punya akun? <a href="{{ route('login') }}" class="text-danger">Masuk</a></span>
            </div>
            <div class="mt-3">
                <a href="{{ url('/auth/redirect/google') }}" class="btn-google w-100">
                    {{-- Ikon Google --}}
                    Lanjutkan dengan Google
                </a>
            </div>
        </div>
    </div>
</body>
</html>