<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jurusan - Teknik Informatika</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            color: black;
        }
        .header {
            background-color: #FF7517;
            color: white;
            padding: 15px;
            display: flex;
            align-items: center;
        }
        .header img {
            width: 40px;
            margin-right: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
        }
        .container {
            padding: 20px;
        }
        .back-button {
            color: black;   
            font-size: 24px;   
            margin-right: 15px;   
            text-decoration: none; 
        }
        .info-box {
            background-color: #f5c99e;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .detail-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            color: #FF7517;
            font-weight: bold;
            margin-bottom: 12px;
            border-bottom: 2px solid #FF7517;
            padding-bottom: 10px;
            display: inline-block;
            margin-left: 18px;
        }
    </style>
</head>
<body>
        <div class="header">  
            <a href="/infoJurusan" class="back-button">←</a> 
            <h1>Temu Jurusan</h1>  
        </div>  
    <div class="container">
        <div class="info-box">
            <h2 style="color: #FF7517;">{{ $jurusan->nama }}</h2>
            <p>{{ $jurusan->deskripsi }}</p>
        </div>
        <div class="section-title">{{ $jurusan->nama }}</div>
        <div class="detail-box">
            <p>{!! $jurusan->konten !!}</p>
        </div>
    </div>
</body>
</html>