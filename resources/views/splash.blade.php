<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Tanaman</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <div class="splash-container">
        
        {{-- BAGIAN ATAS: Placeholder Visual --}}
        <div class="visual-area">
            {{-- Placeholder Kotak 1: Logo/Gambar Utama --}}
            <div class="square-placeholder">
                {{--  --}}
            </div>
            
            {{-- Tombol Login (Kotak Merah Muda) --}}
            {{-- Menggunakan <a> tag untuk mengarah ke /login --}}
            <a href="/login" class="login-button">
                MASUK
            </a>
        </div>

        {{-- BAGIAN BAWAH: Informasi Teks --}}
        <div class="text-info">
            <p class="app-name">Deteksi Tanaman PKK Agropark</p>
            <p class="app-version">v1.1</p>
        </div>

    </div>
</body>
</html>