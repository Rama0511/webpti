🌿 Deteksi Tanaman Obat (Laravel 10, Inertia.js, React, Tailwind CSS)Proyek ini adalah sistem deteksi gambar tanaman obat menggunakan Laravel sebagai backend API/kontrol, Inertia.js untuk jembatan frontend-backend, dan React/TypeScript untuk antarmuka pengguna. Proyek ini juga terintegrasi dengan API Python (Port 8001) untuk proses prediksi model Machine Learning (ML).🚀 Persiapan AwalPastikan Anda memiliki perangkat lunak berikut terinstal di sistem Anda:PHP (Versi 8.1+)ComposerNode.js & npm/YarnGitDatabase (MySQL/SQLite disarankan)Server Python ML API (Diasumsikan berjalan di http://localhost:8001)⚙️ Langkah Instalasi dan SetupIkuti langkah-langkah di bawah ini untuk menjalankan proyek secara lokal.1. Kloning RepositoriBuka terminal Anda dan clone repositori ini:Bashgit clone https://github.com/Rama0511/webpti.git
cd webpti
2. Setup File Lingkungan (.env)Salin file lingkungan contoh dan buat kunci aplikasi:Bashcp .env.example .env
php artisan key:generate
Buka file .env dan atur detail koneksi database Anda:Ini, TOML# Contoh untuk MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
Penting: Pastikan APP_URL dan konfigurasi API di Controller sesuai.3. Instalasi Dependensi PHP (Composer)Instal semua package Laravel yang dibutuhkan:Bashcomposer install
4. Setup Database dan Data AwalJalankan migrasi untuk membuat tabel database dan seeding untuk mengisi data awal (misalnya, data pengguna dan data tanaman):Bashphp artisan migrate --force
php artisan db:seed
5. Instalasi Dependensi JavaScript (NPM)Instal dependensi frontend (React, Inertia, Ziggy):Bashnpm install
# atau
yarn install
6. Ekspos Rute ke JavaScript (Ziggy)Pastikan package [Tighten/Ziggy] telah diekspos di JavaScript (diperlukan untuk fungsi route()):Bashcomposer require tightenco/ziggy # Jika belum diinstal
Catatan: Pastikan directive @routes ada di resources/views/app.blade.php.▶️ Menjalankan AplikasiAnda perlu menjalankan server backend (Laravel) dan bundler frontend (Vite/NPM) secara bersamaan.1. Menjalankan Frontend (Vite)Buka Terminal Baru (Terminal 1) dan jalankan command berikut. Ini akan mengkompilasi aset React dan terus memantau perubahan (hot-reloading):Bashnpm run dev
2. Menjalankan Backend (Laravel Server)Buka Terminal Baru (Terminal 2) dan jalankan server pengembangan Laravel:Bashphp artisan serve
3. Akses AplikasiAplikasi sekarang dapat diakses di browser Anda:http://127.0.0.1:8000/
💻 Struktur Proyek UtamaDirektori/FileFungsiapp/Http/Controllers/DetectionTestController.phpLogika inti untuk menerima upload dan berkomunikasi dengan ML API.app/Models/Tanaman.phpModel untuk menyimpan detail tanaman obat (deskripsi, dll.).database/migrations/Skema database untuk tabel tanaman dan lainnya.resources/js/Pages/Deteksi.tsxKomponen React untuk upload foto.resources/js/Pages/Result.tsxKomponen React untuk menampilkan hasil deteksi.routes/web.phpMendefinisikan rute /deteksi-tanaman (GET) dan /predict (POST).
