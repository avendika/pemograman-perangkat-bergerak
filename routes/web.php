<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InfoJurusanController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

// Public Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dasboard', [NewsController::class, 'dasboard'])->name('dasboard');
Route::get('/infoJurusan', [InfoJurusanController::class, 'index'])->name('infoJurusan');
Route::get('/perbandingan', function () {
    return view('perbandingan');
});
Route::get('/detailJurusan', function () {
    return view('jurusan/detailJurusan');
});

// Auth Routes (Login & Register)
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('login.register');
});
Route::post('/register', [LoginController::class, 'registerPost'])->name('register.post');

// Protected Dashboard Route
Route::middleware(['auth'])->get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

// Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// News Routes
Route::resource('news', NewsController::class);
Route::get('/recent', [NewsController::class, 'recent'])->name('news.recent');
Route::get('/search-berita', [RecentController::class, 'search'])->name('news.search');

// Jurusan Routes
Route::resource('jurusan', JurusanController::class);
Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');

// Gambar Route
Route::get('/images/{filename}', function ($filename) {
    $path = resource_path("views/images/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    return Response::make($file, 200)->header("Content-Type", $type);
});
