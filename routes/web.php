<?php


use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/infoJurusan', function () {
    return view('infoJurusan');
});

Route::get('/perbandingan', function () {
    return view('perbandingan');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});


use App\Http\Controllers\RecentController;
Route::get('/recent', function () {
    return view('recent');
});

use App\Http\Controllers\NewsController;

Route::resource('news', NewsController::class);
Route::get('/recent', [NewsController::class, 'recent'])->name('news.recent');
Route::get('/dasboard', [NewsController::class, 'dasboard'])->name('dasboard');
Route::get('/search-berita', [RecentController::class, 'search'])->name('news.search');


// Route untuk materi jurusan ------------------------------------------------------------------------------

use App\Http\Controllers\JurusanController;

Route::resource('jurusan', JurusanController::class);

Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('jurusan.show');
Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');

Route::get('/detailJurusan', function () {
    return view('jurusan/detailJurusan');
});

// ---------------------------------------------------------------------------------------------------------

use App\Http\Controllers\LoginController;

// Login & Register (pakai folder login, bukan / atau index)
Route::get('/masuk', [LoginController::class, 'index'])->name('login'); // login form
Route::post('/masuk', [LoginController::class, 'login'])->name('login.post'); // login post

Route::get('/daftar', [LoginController::class, 'register'])->name('register'); // register form
Route::post('/daftar', [LoginController::class, 'registerPost'])->name('register.post'); // register post

// Dashboard (setelah login)
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// untuk search ----------------------------------------------------------------------------------

use App\Http\Controllers\InfoJurusanController;

// Other routes...

Route::get('/infoJurusan', [InfoJurusanController::class, 'index'])->name('infoJurusan');

// route gambar index
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

Route::get('/images/{filename}', function ($filename) {
    $path = resource_path("views/images/{$filename}");

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    return Response::make($file, 200)->header("Content-Type", $type);
});




