<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu Jurusan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color:rgb(222, 222, 222);
        }

        .header {
            background-color: #ff5722;
            color: white;   
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            border-radius: 20px;
            margin-right: 5px;
        }

        .search-button {
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 3px 8px;
        }

        .container-fluid {
            padding: 20px;
        }

        .sidebar {
            padding-right: 15px;
            background-color: white;
            border-radius: 5px;
        }

        .list-group-item {
            border-radius: 10px !important;
            margin-top: 10px;
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
            box-shadow: 0 5px 15px rgba(255, 87, 34, 0.3);
        }
        
        .list-group-item i {
            margin-right: 15px;
            font-size: 1.2em;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
        }

        /* Improved Slider Styles */
        .slider-container {
            position: relative;
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider-card {
            flex: 0 0 calc(33.333% - 16px);
            margin-right: 16px;
            border-radius: 0;
            margin-bottom: 0;
            box-shadow: none;
        }

        .slider-card .card-body {
            padding: 15px;
        }

        .slider-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .slider-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            z-index: 10;
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
        }
        
        .slider-control-btn {
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .slider-control-btn:hover {
            background-color: #ff5722;
            color: white;
        }

        /* Responsive Slider Adjustments */
        @media (max-width: 992px) {
            .slider-card {
                flex: 0 0 calc(50% - 16px);
            }
        }
        
        @media (max-width: 768px) {
            .slider-card {
                flex: 0 0 calc(100% - 16px);
            }
        }
        /* End of Improved Slider Styles */

        .features, .majors {
            margin: 30px 0;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .features h4, .majors h4 {
            margin-bottom: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
        }

        .feature-item {
            text-align: center;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: scale(1.1);
        }

        .feature-icon {
            background-color: #f0f0f0;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            transition: all 0.3s ease;
        }

        .feature-item:hover .feature-icon {
            background-color: #ff5722;
            color: white;
            box-shadow: 0 5px 15px rgba(255, 87, 34, 0.3);
        }

        .feature-icon i {
            font-size: 30px;
            color: #666;
            transition: all 0.3s ease;
        }

        .feature-item:hover .feature-icon i {
            color: white;
        }

        .major-item {
            text-align: center;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .major-item:hover {
            transform: translateY(-10px);
        }

        .major-icon {
            background-color: #f0f0f0;
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .major-item:hover .major-icon {
            background-color: #ff5722;
            box-shadow: 0 5px 15px rgba(255, 87, 34, 0.3);
        }

        .major-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: all 0.4s ease;
            z-index: 1;
        }

        .major-item:hover .major-icon::before {
            left: 100%;
        }

        .major-icon i {
            font-size: 24px;
            color: #666;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .major-item:hover .major-icon i {
            color: white;
            transform: rotate(360deg);
        }

        .major-item p {
            margin-top: 8px;
            font-size: 14px;
            font-weight: 500;
        }

        .major-link {
            text-decoration: none;
            color: inherit;
        }

        .major-link:hover {
            color: inherit;
        }

        .fakultas-dropdown {
            background-color: #f0f0f0;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .fakultas-dropdown:hover {
            background-color: #ff5722;
            color: white;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
        <a href="/">
    <img src="images/Logo.png" alt="Logo">
        </a>
            <h3 class="mb-0">Temu Jurusan</h3>
        </div>
        <!-- <div class="search-bar">
            <input type="text" class="form-control form-control-sm" placeholder="Cari">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div> -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action">
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
            <div class="col-md-10">
                <!-- Improved Slider Component -->
                <div class="slider-container">
                    <div class="slider-wrapper" id="sliderWrapper">
                    @foreach ($newsList as $news)
                            <div class="card slider-card">
                            @if ($news->image)
                                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="width: 400px; height: 200px; object-fit: cover;" class="mb-3">
                            @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($news->description, 150) }}</h5>
                                </div>
                            </div>
                    @endforeach    
                    </div>
                    <div class="slider-controls">
                        <button id="prevBtn" class="slider-control-btn"><i class="fas fa-chevron-left"></i></button>
                        <button id="nextBtn" class="slider-control-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <div class="features">
                    <h4>Fitur Lainnya</h4>
                    <div class="row">
                        <div class="col">
                            <div class="feature-item">
                                <a href="/perbandingan" style="text-decoration: none;">
                                <div class="feature-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                </a>
                                <p>VS Major</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="majors">
                    <h4>
                        Jurusan Kuliah
                    </h4>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
    <div class="col">
        <a href="/jurusan/4" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-bolt"></i></div>
                <p>Teknik Elektro</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/2" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-code"></i></div>
                <p>Teknik Informatika</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/4" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-desktop"></i></div>
                <p>Teknik Komputer</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/5" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-film"></i></div>
                <p>Teknologi Multimedia Broadcasting</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/9" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-satellite-dish"></i></div>
                <p>Teknik Telekomunikasi</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/10" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-industry"></i></div>
                <p>Teknik Elektro Industri</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/11" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-robot"></i></div>
                <p>Teknik Mekatronika</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/12" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-solar-panel"></i></div>
                <p>Teknik Pembangkitan Energi</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/13" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-gamepad"></i></div>
                <p>Teknologi Game</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/14" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-network-wired"></i></div>
                <p>Teknologi Rekayasa Internet</p>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="/jurusan/15" class="major-link">
            <div class="major-item">
                <div class="major-icon"><i class="fas fa-chart-bar"></i></div>
                <p>Sains Data Terapan</p>
            </div>
        </a>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    
    <!-- Improved Slider Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const wrapper = document.getElementById('sliderWrapper');
            const cards = document.querySelectorAll('.slider-card');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            if(!wrapper || cards.length === 0) return;
            
            // Calculate visible cards based on viewport width
            function getCardsPerSlide() {
                if(window.innerWidth < 768) {
                    return 1; // Mobile - 1 card
                } else if(window.innerWidth < 992) {
                    return 2; // Tablet - 2 cards
                } else {
                    return 3; // Desktop - 3 cards
                }
            }
            
            let cardsPerSlide = getCardsPerSlide();
            let currentSlide = 0;
            
            function updateSliderPosition() {
                if(!wrapper || cards.length === 0) return;
                
                // Recalculate cards per slide on each update
                cardsPerSlide = getCardsPerSlide();
                
                // Calculate total slides
                const totalSlides = Math.ceil(cards.length / cardsPerSlide);
                
                // Make sure currentSlide is valid
                if(currentSlide >= totalSlides) {
                    currentSlide = totalSlides - 1;
                }
                
                // Get container width
                const containerWidth = wrapper.parentElement.offsetWidth;
                
                // Calculate width each card should take
                const cardWidth = (containerWidth / cardsPerSlide) - (16 * (cardsPerSlide - 1) / cardsPerSlide);
                
                // Set width for all cards
                cards.forEach(card => {
                    card.style.flex = `0 0 ${cardWidth}px`;
                    card.style.maxWidth = `${cardWidth}px`;
                });
                
                // Calculate how far to translate
                const translateX = currentSlide * (cardsPerSlide * cardWidth + 16 * cardsPerSlide);
                wrapper.style.transform = `translateX(-${translateX}px)`;
                
                // Update button visibility
                prevBtn.style.visibility = currentSlide === 0 ? 'hidden' : 'visible';
                nextBtn.style.visibility = currentSlide >= totalSlides - 1 ? 'hidden' : 'visible';
            }
            
            function nextSlide() {
                const totalSlides = Math.ceil(cards.length / cardsPerSlide);
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                    updateSliderPosition();
                }
            }
            
            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                    updateSliderPosition();
                }
            }
            
            // Add click event listeners
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);
            
            // Auto slide every 5 seconds
            let autoSlideInterval = setInterval(function() {
                const totalSlides = Math.ceil(cards.length / cardsPerSlide);
                if (currentSlide < totalSlides - 1) {
                    currentSlide++;
                } else {
                    currentSlide = 0;
                }
                updateSliderPosition();
            }, 5000);
            
            // Pause auto-sliding when user interacts with controls
            [prevBtn, nextBtn].forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    clearInterval(autoSlideInterval);
                });
                
                btn.addEventListener('mouseleave', () => {
                    autoSlideInterval = setInterval(function() {
                        const totalSlides = Math.ceil(cards.length / cardsPerSlide);
                        if (currentSlide < totalSlides - 1) {
                            currentSlide++;
                        } else {
                            currentSlide = 0;
                        }
                        updateSliderPosition();
                    }, 5000);
                });
            });
            
            // Initial setup
            updateSliderPosition();
            
            // Adjust slider when window is resized
            window.addEventListener('resize', updateSliderPosition);
        });
    </script>
</body>
</html>