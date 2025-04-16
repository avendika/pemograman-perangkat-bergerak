<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('jurusan.index') }}">CRUD Jurusan</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
