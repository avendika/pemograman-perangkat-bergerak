<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Temu Jurusan - PENS</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Base Styles -->
    <style>
        :root {
            --primary-color: #ff5722;
            --secondary-color: #f5f5f5;
            --text-color: #333333;
            --border-radius: 10px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            padding: 0.5rem 1rem;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .navbar-brand img {
            margin-right: 0.5rem;
        }
        
        .sidebar {
            min-height: calc(100vh - 56px);
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--text-color);
            text-decoration: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            background-color: rgba(255, 87, 34, 0.1);
            color: var(--primary-color);
        }
        
        .sidebar-link i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }
        
        .search-form {
            position: relative;
        }
        
        .search-form input {
            padding-right: 40px;
            border-radius: var(--border-radius);
        }
        
        .search-form button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background: none;
            border: none;
            padding: 0 15px;
        }
        
        .content-wrapper {
            padding: 1.5rem;
        }
        
        .card {
            border-radius: var(--border-radius);
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #e64a19;
            border-color: #e64a19;
        }
    </style>
    
    <!-- Additional styles from child views -->
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="PENS Logo" height="32">
                Temu Jurusan
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="ms-auto">
                    <form class="search-form d-flex">
                        <input class="form-control" type="search" placeholder="Cari" aria-label="Search">
                        <button type="submit">
                            <i class="fas fa-search text-white"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-lg-2 col-md-3 sidebar">
                <a href="/dasboard" class="sidebar-link {{ request()->is('dasboard') ? 'active' : '' }}">
                    <i class="fas fa-th-large"></i> Dashboard
                </a>
                <a href="/infoJurusan" class="sidebar-link {{ request()->is('infoJurusan') ? 'active' : '' }}">
                    <i class="fas fa-graduation-cap"></i> Jurusan
                </a>
                <a href="/recent" class="sidebar-link {{ request()->is('recent') ? 'active' : '' }}">
                    <i class="fas fa-clock"></i> Recent
                </a>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-10 col-md-9 content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Additional scripts from child views -->
    @yield('scripts')
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Berita Terbaru</h2>

        {{-- Form Pencarian --}}
        <form action="{{ route('recent.search') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari berita..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
        </form>
</body>
</html>