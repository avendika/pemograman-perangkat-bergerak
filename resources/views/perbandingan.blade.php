<?php
    // Data jurusan fakultas teknik
    $jurusan = [
        "Teknik Informatika", 
        "Teknik Elektro", 
        "Teknik Mesin", 
        "Teknik Sipil", 
        "Teknik Lingkungan", 
        "Teknik Industri", 
        "Teknik Kimia"
    ];

    // Data perbandingan jurusan (bisa diperluas)
    $perbandingan = [
        "Teknik Informatika" => [
            "deskripsi" => "Fokus pada pengembangan perangkat lunak, kecerdasan buatan, dan sistem informasi",
            "prospek_kerja" => "Software Engineer, Data Scientist, Web Developer, Mobile Developer",
            "mata_kuliah" => "Pemrograman, Algoritma, Basis Data, Jaringan Komputer",
            "keahlian" => "Coding, Problem Solving, Analytical Thinking"
        ],
        "Teknik Elektro" => [
            "deskripsi" => "Fokus pada sistem tenaga listrik, elektronika, dan telekomunikasi",
            "prospek_kerja" => "Electrical Engineer, Telecommunications Engineer, Control Systems Engineer",
            "mata_kuliah" => "Rangkaian Listrik, Elektronika, Sistem Tenaga, Telekomunikasi",
            "keahlian" => "Circuit Design, Electronics, Power Systems"
        ],
        "Teknik Mesin" => [
            "deskripsi" => "Fokus pada perancangan, pengembangan, dan manufaktur mesin dan sistem mekanik",
            "prospek_kerja" => "Mechanical Engineer, Design Engineer, Automotive Engineer",
            "mata_kuliah" => "Mekanika, Termodinamika, Konstruksi Mesin, Material",
            "keahlian" => "3D Modeling, Mechanical Design, Thermodynamics"
        ],
        "Teknik Sipil" => [
            "deskripsi" => "Fokus pada perancangan dan konstruksi infrastruktur seperti jalan, jembatan, dan gedung",
            "prospek_kerja" => "Civil Engineer, Structural Engineer, Project Manager",
            "mata_kuliah" => "Struktur, Konstruksi, Geoteknik, Hidrologi",
            "keahlian" => "Structural Analysis, Construction Management, AutoCAD"
        ],
        "Teknik Lingkungan" => [
            "deskripsi" => "Fokus pada solusi teknologi untuk masalah lingkungan dan pengelolaan sumber daya",
            "prospek_kerja" => "Environmental Engineer, Sustainability Consultant, Waste Management Specialist",
            "mata_kuliah" => "Pengelolaan Limbah, Kualitas Air, Teknologi Lingkungan",
            "keahlian" => "Environmental Assessment, Waste Management, Pollution Control"
        ],
        "Teknik Industri" => [
            "deskripsi" => "Fokus pada optimasi sistem manufaktur, manajemen operasi, dan efisiensi produksi",
            "prospek_kerja" => "Industrial Engineer, Process Improvement Specialist, Quality Manager",
            "mata_kuliah" => "Optimasi, Sistem Produksi, Ergonomi, Manajemen Proyek",
            "keahlian" => "Process Optimization, Six Sigma, Operation Research"
        ],
        "Teknik Kimia" => [
            "deskripsi" => "Fokus pada proses dan perancangan peralatan yang melibatkan perubahan kimia atau fisika",
            "prospek_kerja" => "Chemical Engineer, Process Engineer, Production Supervisor",
            "mata_kuliah" => "Termodinamika, Operasi Unit, Kinetika Reaksi, Pengendalian Proses",
            "keahlian" => "Process Design, Chemical Analysis, Safety Management"
        ]
    ];

    $hasil = null;
    $jurusan1 = "";
    $jurusan2 = "";

    // Proses form jika dikirimkan (menggunakan GET)
    if (isset($_GET["jurusan1"]) && isset($_GET["jurusan2"])) {
        $jurusan1 = $_GET["jurusan1"] ?? "";
        $jurusan2 = $_GET["jurusan2"] ?? "";

        if (!empty($jurusan1) && !empty($jurusan2)) {
            // Mengambil data perbandingan
            $hasil = [
                "jurusan1" => $perbandingan[$jurusan1] ?? [],
                "jurusan2" => $perbandingan[$jurusan2] ?? []
            ];
        }
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandingkan Jurusan Teknik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            text-align: center;
        }
        .header {
            background-color: #FF7517;
            color: white;
            padding: 15px;
            font-size: 26px;
            font-weight: bold;
            position: relative;
        }
        .back-button {
            color: white;
            font-size: 24px;
            text-decoration: none;
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
        }
        .sub-header {
            background-color: #FF7517;
            color: white;
            font-size: 16px;
            padding: 15px;
            margin-top: -20px;
        }
        .container {
            background-color: white;
            width: 90%;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .title {
            color: black;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }
        .comparison-box {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 20px 0;
        }
        .versus {
            font-size: 20px;
            font-weight: bold;
            background-color: #FF7517;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            position: relative;
        }
        .jurusan-box {
            width: 200px;
            height: 50px;
            font-size: 16px;
            border-radius: 8px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .button {
            background-color: #FF7517;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .button:hover {
            background-color: #FF7517;
        }
        .button.reset {
            background-color:rgb(255, 0, 0);
        }
        .button.reset:hover {
            background-color: #d32f2f;
        }
        
        /* Styles for comparison results */
        .comparison-results {
            margin-top: 30px;
            text-align: left;
            display: none;
        }
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .comparison-table th {
            background-color: #FF7517;
            color: white;
            padding: 12px;
            text-align: center;
        }
        .comparison-table td {
            padding: 12px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .category {
            font-weight: bold;
            background-color: #f5f5f5;
        }
        
        /* Animasi perbandingan yang diperbarui dengan gambar external */
        .sword-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            flex-direction: column;
        }
        .swords-container {
            position: relative;
            width: 300px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .sword {
            position: absolute;
            width: 120px;
            height: 120px;
            transition: transform 0.5s ease-in;
        }
        .sword-left {
            left: -20px;
            transform: translateX(-100px) rotate(-45deg);
        }
        .sword-right {
            right: -20px;
            transform: translateX(100px) scaleX(-1) rotate(-45deg);
        }
        
        .versus-text {
            background-color: #FF7517;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 10px;
            z-index: 10;
            position: relative;
        }
        .animation-active .sword-left {
            transform: translateX(100px) rotate(0deg);
            z-index: 9;
        }
        .animation-active .sword-right {
            transform: translateX(-100px) scaleX(-1) rotate(0deg);
            z-index: 8;
        }
        .loading-text {
            color: white;
            font-size: 24px;
            margin-top: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        Bandingkan Jurusan Teknik
        <a href="/dasboard" class="back-button" onclick="history.back(); return false;">←</a>
    </div>
    <div class="sub-header">Temukan jurusan teknik yang sesuai dengan minat dan bakatmu</div>
    
    <div class="container">
        <div class="title">Bandingkan Jurusan Teknik, Temukan yang Terbaik!</div>
        <div class="subtitle">Temukan jurusan teknik yang tepat dengan perbandingan cerdas untuk menemukan yang paling sesuai dengan minat dan karier impianmu!</div>
        
        <!-- Ubah method dari POST ke GET -->
        <form method="GET" action="" id="comparisonForm">
            <div class="comparison-box">
                <select name="jurusan1" class="jurusan-box" required>
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($jurusan as $j) { 
                        $selected = ($j == $jurusan1) ? "selected" : "";
                        echo "<option value='$j' $selected>$j</option>"; 
                    } ?>
                </select>
                <div class="versus">VS</div>
                <select name="jurusan2" class="jurusan-box" required>
                    <option value="">Pilih Jurusan</option>
                    <?php foreach ($jurusan as $j) { 
                        $selected = ($j == $jurusan2) ? "selected" : "";
                        echo "<option value='$j' $selected>$j</option>"; 
                    } ?>
                </select>
            </div>
            <div class="buttons">
                <button type="submit" class="button" id="compareButton">Bandingkan Sekarang</button>
                <button type="reset" class="button reset">Reset</button>
            </div>
        </form>
        
        <!-- Hasil Perbandingan -->
        <div class="comparison-results" id="comparisonResults" <?php echo $hasil ? 'style="display:block;"' : ''; ?>>
            <h2>Hasil Perbandingan</h2>
            <?php if ($hasil): ?>
                <table class="comparison-table">
                    <tr>
                        <th>Aspek</th>
                        <th><?php echo htmlspecialchars($jurusan1); ?></th>
                        <th><?php echo htmlspecialchars($jurusan2); ?></th>
                    </tr>
                    <tr>
                        <td class="category">Deskripsi</td>
                        <td><?php echo htmlspecialchars($hasil["jurusan1"]["deskripsi"] ?? "-"); ?></td>
                        <td><?php echo htmlspecialchars($hasil["jurusan2"]["deskripsi"] ?? "-"); ?></td>
                    </tr>
                    <tr>
                        <td class="category">Prospek Kerja</td>
                        <td><?php echo htmlspecialchars($hasil["jurusan1"]["prospek_kerja"] ?? "-"); ?></td>
                        <td><?php echo htmlspecialchars($hasil["jurusan2"]["prospek_kerja"] ?? "-"); ?></td>
                    </tr>
                    <tr>
                        <td class="category">Mata Kuliah Utama</td>
                        <td><?php echo htmlspecialchars($hasil["jurusan1"]["mata_kuliah"] ?? "-"); ?></td>
                        <td><?php echo htmlspecialchars($hasil["jurusan2"]["mata_kuliah"] ?? "-"); ?></td>
                    </tr>
                    <tr>
                        <td class="category">Keahlian yang Dipelajari</td>
                        <td><?php echo htmlspecialchars($hasil["jurusan1"]["keahlian"] ?? "-"); ?></td>
                        <td><?php echo htmlspecialchars($hasil["jurusan2"]["keahlian"] ?? "-"); ?></td>
                    </tr>
                </table>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Animasi Perbandingan dengan Gambar External -->
    <div class="sword-animation" id="swordAnimation">
        <div class="swords-container" id="swordsContainer">
            <img src="images/sword1.png" class="sword sword-left" alt="Sword Left">
            <div class="versus-text">VS</div>
            <img src="images/sword1.png" class="sword sword-right" alt="Sword Right">
        </div>
        <div class="loading-text">Membandingkan Jurusan...</div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('comparisonForm');
            const swordAnimation = document.getElementById('swordAnimation');
            const swordsContainer = document.getElementById('swordsContainer');
            const comparisonResults = document.getElementById('comparisonResults');
            
            // Preload images to ensure they're available for the animation
            const preloadImages = () => {
                const swordImage = new Image();
                swordImage.src = "https://cdn-icons-png.flaticon.com/512/5169/5169479.png";
            };
            
            preloadImages();
            
            form.addEventListener('submit', function(e) {
                // Cek apakah jurusan yang sama dipilih
                const jurusan1 = form.querySelector('select[name="jurusan1"]').value;
                const jurusan2 = form.querySelector('select[name="jurusan2"]').value;
                
                if (jurusan1 === jurusan2 && jurusan1 !== "") {
                    e.preventDefault();
                    alert("Mohon pilih dua jurusan yang berbeda untuk dibandingkan!");
                    return false;
                }
                
                if (jurusan1 && jurusan2) {
                    e.preventDefault();
                    
                    // Tampilkan animasi
                    swordAnimation.style.display = 'flex';
                    
                    // Mulai animasi setelah beberapa saat
                    setTimeout(function() {
                        swordsContainer.classList.add('animation-active');
                        
                        // Setelah animasi selesai, redirect dengan parameter GET
                        setTimeout(function() {
                            swordAnimation.style.display = 'none';
                            swordsContainer.classList.remove('animation-active');
                            // Redirect dengan parameter GET
                            window.location.href = `?jurusan1=${encodeURIComponent(jurusan1)}&jurusan2=${encodeURIComponent(jurusan2)}`;
                        }, 1500);
                    }, 500);
                }
            });
            
            // Reset tombol
            document.querySelector('button[type="reset"]').addEventListener('click', function() {
                if (comparisonResults) {
                    comparisonResults.style.display = 'none';
                }
            });

            // Tampilkan hasil jika ada parameter dalam URL
            if (window.location.search.includes('jurusan1') && window.location.search.includes('jurusan2')) {
                comparisonResults.style.display = 'block';
            }
        });
    </script>
</body>
</html>