<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terkini Jurusan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }
        
        /* Sidebar styling */
        .sidebar {
            background-color: #fff;
            height: 100vh;
            width: 30vh;
            transition: all 0.3s ease;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
            padding-top: 20px;
            overflow-y: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar.collapsed {
            transform: translateX(-180px);
        }
        
        .list-group-item {
            border-radius: 10px !important;
            margin-bottom: 10px;
            border: none;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .list-group-item:hover {
            background-color: #ff5722;
            color: white;
            transform: translateX(5px);
        }
        
        .list-group-item i {
            margin-right: 15px;
            font-size: 1.2em;
        }
        
        /* Keeping the original toggle button positioning */
        .toggle-btn {
            position: fixed;
            left: 178px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #ff5722;
            color: white;
            border: none;
            width: 25px;
            height: 40px;
            border-radius: 0 5px 5px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 101;
            transition: all 0.3s ease;
        }
        
        .sidebar.collapsed + .toggle-btn {
            left: 0;
        }
        
        /* Main content area */
        .main-content {
            transition: all 0.3s ease;
            margin-left: 250px;
            padding: 0 15px;
            width: calc(100% - 250px);
        }
        
        .main-content.expanded {
            margin-left: 70px;
            width: calc(100% - 70px);
        }
        
        /* Original Header section */
        .header {
            background-color: #FF7F24;
            padding: 20px;
            border-radius: 5px;
            color: white;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
        .header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 14px;
            margin-bottom: 0;
        }
        
        /* Search bar */
        .search-container {
            margin: 20px 0;
            position: relative;
        }
        
        .search-input {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 8px 15px;
            width: 100%;
        }
        
        .search-button {
            background-color: #ff5722;
            border: none;
            color: white;
            border-radius: 5px;
            padding: 5px 10px;
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
        }
        
        /* Content container */
        .content-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        /* Featured banner */
        .featured-banner {
            width: 100%;
            position: relative;
        }
        
        .featured-banner img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* News item */
        .news-section {
            padding: 0;
        }
        
        .news-header {
            color: #ff5722;
            padding: 10px 15px;
            font-weight: bold;
        }
        
        .news-header h3 {
            margin-bottom: 0;
            font-size: 1.25rem;
        }
        
        .news-body {
            padding: 20px;
        }
        
        .news-description {
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .detail-btn {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .detail-btn:hover {
            background-color: #e64a19;
            transform: scale(1.05);
            color: white;
        }

        /* Responsive Media Queries */
        @media (max-width: 992px) {
            .sidebar {
                width: 220px;
            }
            .main-content {
                margin-left: 220px;
                width: calc(100% - 220px);
            }
            .main-content.expanded {
                margin-left: 40px;
                width: calc(100% - 40px);
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
                width: calc(100% - 200px);
                padding: 0 10px;
            }
            .main-content.expanded {
                margin-left: 20px;
                width: calc(100% - 20px);
            }
            .header h1 {
                font-size: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .sidebar {
                width: 180px;
            }
            .header {
                padding: 15px 10px;
            }
            .header h1 {
                font-size: 18px;
            }
            .news-header h3 {
                font-size: 1.1rem;
            }
            .news-body {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar navigation -->
    <div class="sidebar" id="sidebar">
        <div class="list-group mx-2">
            <a href="/dasboard" class="list-group-item list-group-item-action">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
            <a href="/infoJurusan" class="list-group-item list-group-item-action">
                <i class="fas fa-book"></i>
                Jurusan
            </a>
            <a href="/recent" class="list-group-item list-group-item-action">
                <i class="fas fa-history"></i>
                Recent
            </a>
        </div>
    </div>

    <!-- Toggle button for sidebar - keeping original position -->
    <button class="toggle-btn" id="toggleBtn">
        <i class="fas fa-chevron-left" id="toggleIcon"></i>
    </button>
    
    <!-- Main content area -->
    <div class="main-content" id="mainContent">
        <!-- Original Header section -->
        <div class="header">
            <h1>Berita Terkini Jurusan Kami</h1>
            <p>Ikuti perkembangan terbaru seputar kegiatan dan prestasi jurusan kami.</p>
        </div>
        
        <!-- Search bar -->
        <!-- <div class="search-container">
            <form action="/search-berita" method="GET">
                <input type="text" class="search-input" name="search" placeholder="Cari Berita">
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div> -->
        
        <div class="content-container">

    <!-- News items -->
    @foreach ($newsList as $news)
        <div class="news-section mb-4">
            <div class="news-body">
                @if ($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="width: 400px; height: 200px; object-fit: cover;" class="mb-3">
                @endif
                <div class="news-header">
                    <h3>{{ $news->title }}</h3>
                </div>
                <p class="news-description">{{ Str::limit($news->description, 150) }}</p>
                <div class="text-end mt-2">
                    <a href="{{ $news->link }}" class="detail-btn">Lihat Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('toggleBtn');
            const toggleIcon = document.getElementById('toggleIcon');
            const mainContent = document.getElementById('mainContent');
            
            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
                
                if (sidebar.classList.contains('collapsed')) {
                    toggleIcon.classList.remove('fa-chevron-left');
                    toggleIcon.classList.add('fa-chevron-right');
                } else {
                    toggleIcon.classList.remove('fa-chevron-right');
                    toggleIcon.classList.add('fa-chevron-left');
                }
            });
        });
    </script>
</body>
</html>