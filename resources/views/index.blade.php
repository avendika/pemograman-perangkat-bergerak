<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temu Jurusan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            overflow-x: hidden;
        }
        
        .container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 8px; 
            position: absolute;
            top: 20px; 
            left: 20px;
            z-index: 10;
        }
        
        .logo {
            width: 32px; 
            height: auto; 
        }
        
        .logo-text {
            font-size: 1.2em;
            font-weight: bold;
            color: white;
        }
        
        .left {
            background: linear-gradient(to right, #d65a10, #f77924);
            color: white;
            flex: 1;
            padding: 5%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-top-right-radius: 180px; 
            border-bottom-right-radius: 180px; 
        }
        
        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('background-pattern.png') repeat;
            background-size: contain;
            padding: 20px;
        }
        
        .right img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }
        
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 1.2em;
            margin-top: 10px;
            line-height: 1.6;
        }
        
        .buttons {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .button {
            background-color: #ff8400;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        
        .button:hover {
            background-color: #e37200;
        }
        
        /* Responsive styles */
        @media (max-width: 1024px) {
            h1 {
                font-size: 2.2em;
            }
            
            p {
                font-size: 1.1em;
            }
            
            .left {
                border-top-right-radius: 120px; 
                border-bottom-right-radius: 120px;
            }
        }
        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .left {
                border-radius: 0 0 80px 80px;
                padding: 80px 5% 50px;
                order: 1;
            }
            
            .right {
                order: 2;
                padding: 40px 20px;
            }
            
            .logo-container {
                top: 15px;
                left: 15px;
            }
            
            h1 {
                font-size: 2em;
            }
            
            .right img {
                max-width: 300px;
            }
        }
        
        @media (max-width: 480px) {
            h1 {
                font-size: 1.8em;
            }
            
            p {
                font-size: 1em;
            }
            
            .left {
                padding: 70px 5% 40px;
                border-radius: 0 0 50px 50px;
            }
            
            .buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .button {
                width: 100%;
                padding: 12px 0;
                text-align: center;
            }
            
            .right img {
                max-width: 220px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="images/Logo.png" alt="Logo" class="logo">
            <span class="logo-text">Temu Jurusan</span>
        </div>
        <div class="left">
            <h1>Yuk, <br> Cari jurusan yang tepat buat kamu!</h1>
            <p>Bingung memilih jurusan kuliah yang tepat? <br class="hide-mobile"> Tenang, di sini kamu bisa menemukan 
            rekomendasi jurusan yang sesuai dengan minat, bakat, dan prospek karier di masa depan. 
            Yuk, jelajahi dan temukan jalan terbaik untuk meraih impianmu! 🚀
            </p>
            <div class="buttons">
                <button class="button" onclick="window.location.href='/dasboard'">Masuk</button>
                <button class="button" onclick="window.location.href='/register'">Daftar</button>
            </div>
        </div>
        <div class="right">
            <img src="images/imgdepan.png" alt="Ilustrasi" width="400">
        </div>

    </div>
</body>
</html>