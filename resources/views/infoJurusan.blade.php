    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pencarian Jurusan Fakultas Teknik</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
        <style>
            body {
                background-color: #e9ecef;
                font-family: Arial, sans-serif;
                overflow-x: hidden;
            }

            .header-section {
                background-color: #e9ecef;
                padding: 20px;
                border-radius: 10px;
                position: relative;
            }

            .header-section::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 5px;
                height: 100%;
                background-color: #ff5722;
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }

            .header-section::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background-color: #ff5722;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            .header-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .header-subtitle {
                font-size: 14px;
                color: #666;
            }

            .search-container {
                margin: 20px 0;
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

            .sidebar {
                background-color: #e9ecef;
                height: 100vh;
                transition: all 0.3s ease;
                position: fixed;
                left: 0;
                top: 0;
                z-index: 100;
                padding-top: 20px;
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

            .main-content {
                transition: all 0.3s ease;
                margin-left: 200px;
            }

            .main-content.expanded {
                margin-left: 20px;
            }

            .jurusan-card {
                background-color: #fff;
                border-radius: 10px;
                overflow: hidden;
                margin-bottom: 20px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                transition: all 0.3s ease;
            }

            .jurusan-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .jurusan-header {
                background-color: #ff5722;
                color: white;
                padding: 10px 15px;
                font-weight: bold;
            }

            .jurusan-body {
                padding: 20px;
                height: 180px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .jurusan-description {
                font-size: 14px;
                color: #555;
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
                margin-left: auto;
            }


            .detail-btn:hover {
                background-color: #e64a19;
                transform: scale(1.05);
            }
        </style>
    </head>

    <body>
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

        <button class="toggle-btn" id="toggleBtn">
            <i class="fas fa-chevron-left" id="toggleIcon"></i>
        </button>

        <div class="main-content" id="mainContent">
            <div class="header-section">
                <h1 class="header-title">Pencarian Jurusan Fakultas Teknik</h1>
                <p class="header-subtitle">Temukan jurusan Teknik Idamanmu</p>
            </div>

        <!-- Replace your existing search container with this -->
        <div class="search-container position-relative">
            <form action="{{ route('infoJurusan') }}" method="GET">
                <input type="text" id="search-input" name="search" class="search-input" 
                    placeholder="Cari Jurusan Teknik" value="{{ $search ?? '' }}">
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Then, modify your PHP code where the jurusan data is defined -->
        @php
            $jurusan = [
                ['id' => 2, 'nama' => 'Teknik Informatika', 'deskripsi' => 'Mempelajari pengembangan software, algoritma, kecerdasan buatan, pemrograman, dan sistem informasi. Lulusan dapat berkarir sebagai developer, data scientist, atau system analyst.'],
                ['id' => 3, 'nama' => 'Teknik Komputer', 'deskripsi' => 'Fokus pada perancangan perangkat keras komputer, arsitektur sistem, jaringan, dan embedded system. Prospek kerja meliputi hardware engineer, network specialist dan IoT developer.'],
                ['id' => 4, 'nama' => 'Teknik Elektro', 'deskripsi' => 'Mengkaji sistem kelistrikan, elektronika, telekomunikasi, dan kontrol. Lulusan dapat bekerja di bidang pembangkit listrik, otomasi industri, dan pengembangan teknologi.'],
                ['id' => 5, 'nama' => 'Teknologi Multimedia Broadcasting', 'deskripsi' => 'Mempelajarai desain grafis, animasi, produksi video, dan pengembangan game, Lulusan dapat berkarir sebagai desainer UI/UX, animator, dan game developer.'],
                ['id' => 9, 'nama' => 'Teknik Telekomunikasi', 'deskripsi' => 'Teknik Telekomunikasi adalah disiplin ilmu yang berkaitan dengan transfer data dengan jaringan kabel maupun nirkabel.'],
                ['id' => 10, 'nama' => 'Teknik Elektro Industri', 'deskripsi' => 'Jurusan Elektronika Industri adalah bidang teknik yang mempelajari tentang komponen listrik dan juga berbagai macam semikonduktor.'],
                ['id' => 11, 'nama' => 'Teknik Mekatronika', 'deskripsi' => 'Jurusan Teknik Mekatronika ini adalah perpaduan dari berbagai macam cabang keilmuan di bidang teknik seperti misalnya Teknik Mesin, Teknik Elektro, dan Ilmu Komputasi yang mencakup software, computer service, dan juga hardware.'],
                ['id' => 12, 'nama' => 'Teknik Pembangkitan Energi', 'deskripsi' => 'Sistem Pembangkit Energi merupakan ilmu yang mempelajari proses konversi dan pembangkitan energi khususnya energi listrik. Dengan mempelajari konsep dasar termodinamika dan rangkaian listrik sebagai salah satu aspek penting nya.'],
                ['id' => 13, 'nama' => 'Teknologi Game', 'deskripsi' => 'Jurusan Teknologi Game merupakan program studi yang mempelajari tentang bagaimana sebuah game atau permainan dibuat sampai bisa dimainkan oleh banyak orang.'],
                ['id' => 14, 'nama' => 'Teknologi Rekayasa Internet', 'deskripsi' => 'Jurusan ini mempelajari bidang teknologi yang berfokus pada penerapan teknologi jaringan komputer dan internet dengan cara melibatkan ilmu matematika, logika, perangkat keras, dan juga perangkat lunak.'],
                ['id' => 15, 'nama' => 'Sains Data Terapan', 'deskripsi' => 'Sains Data adalah sebuah ilmu terapan yang menganalisis serta mempelajari wawasan dari banyak data, baik terstruktur atau tidak terstruktur. Ilmu sains data ini adalah bidang ilmu gabungan mulai dari statistika, bisnis dan ilmu komputer.'],
            ];
            
            // Filter jurusan array if search parameter exists
            if(isset($search) && !empty($search)) {
                $jurusan = array_filter($jurusan, function($jrs) use ($search) {
                    return (stripos($jrs['nama'], $search) !== false || 
                            stripos($jrs['deskripsi'], $search) !== false);
                });
            }
        @endphp

        <!-- Use forelse instead of foreach to handle empty results -->
        <div class="row">
            @forelse ($jurusan as $jrs)
                <div class="col-md-4">
                    <div class="jurusan-card">
                        <div class="jurusan-header">{{ $jrs['nama'] }}</div>
                        <div class="jurusan-body">
                            <p class="jurusan-description">{{ $jrs['deskripsi'] }}</p>
                            <button class="detail-btn" onclick="location.href='{{ route('jurusan.show', $jrs['id']) }}'">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center mt-4">
                    <div class="alert alert-info">
                        Tidak ada jurusan yang ditemukan untuk pencarian "{{ $search }}"
                    </div>
                </div>
            @endforelse
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