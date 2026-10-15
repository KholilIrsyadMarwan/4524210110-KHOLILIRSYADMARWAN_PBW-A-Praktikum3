📘 LAPORAN PRAKTIKUM PERTEMUAN KE - 3

Laporan ini disusun untuk memenuhi Tugas Praktikum 3 Pemrograman Berbasis Web

Dosen Pengampu: Bambang Riono Arsad, S.Kom., MMSI

🧑‍🎓 Oleh:

Kholil Irsyad Marwan — 4524210110

Kelas PBW - A

PROGRAM STUDI TEKNIK INFORMATIKA

FAKULTAS TEKNIK — UNIVERSITAS PANCASILA

2026/2027

🎯 Tentang Aplikasi

LaraPress adalah aplikasi web portofolio interaktif berbasis Laravel 12 yang dibangun pada Praktikum 3. Aplikasi ini dirancang untuk menampilkan profil profesional, keahlian, alur kerja pemrosesan data, serta saluran komunikasi terintegrasi dengan gaya antarmuka Dark Slate Glassmorphism.

🌐 Halaman Tersedia (Available Pages):

Halaman Beranda (/) — Tampilan utama portofolio yang menyajikan ringkasan profil, skills stack, dan tombol navigasi cepat.

Halaman Tentang Kami (/about) — Biografi ringkas beserta metodologi dan alur kerja pemrosesan data.

Halaman Kontak (/kontak) — Pusat informasi komunikasi publik, sosial media, dan tautan repositori kode di GitHub.

✨ Fitur Utama

✅ 3 Halaman Statis Terintegrasi — Navigasi seamless antar halaman (Beranda, Tentang Kami, dan Kontak).

✅ Dark Slate & Cyan Glassmorphism UI — Desain modern dan elegan berbasis CSS Vanilla kustom.

✅ Desain Responsif — Tampilan optimal di berbagai ukuran layar device.

✅ Profil & Sosial Media Link — Akses langsung ke Email Mahasiswa, Instagram, dan Repositori GitHub.

✅ Interaktif Call to Action (CTA) — Tombol navigasi cepat antar halaman.

🛠️ Tech Stack

Backend

Laravel 12.x — PHP Web Framework

PHP ^8.2 — Programming Language

Eloquent ORM — Database Management

Frontend

Blade Templates — Laravel Engine Templating

Custom CSS3 — Flexbox, CSS Grid, & Glassmorphism Styling

📋 Soal & Jawaban Praktikum

Soal:

Buat satu halaman statis baru bernama "Kontak".

Halaman ini harus bisa diakses melalui URL /kontak.

Isi halaman tersebut dengan informasi kontak fiktif (misal: email dan nomor telepon).

Jangan lupa tambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya.

Jawaban & Penjelasan Implementasi:

1. Membuat Halaman Kontak (/kontak)

Penjelasan: Tampilan ini berisikan beberapa informasi seperti email pribadi, media sosial, serta link profil dan repositori GitHub.

2. Akses Navigasi Antar Halaman

Penjelasan:

Dari halaman Kontak, pengguna dapat mengakses link ke halaman Tentang Kami begitu juga sebaliknya.

Dari halaman Kontak, pengguna juga dapat mengakses link ke halaman Beranda begitu juga sebaliknya.

3. Detail Informasi Kontak

Penjelasan: Pada halaman ini digunakan rincian kontak berupa Email Mahasiswa (marwansi4524110@univpancasila.ac.id.com) dan Instagram (@Kholil_Irsyad_Marwan).

4. Menu Navigasi Utama (Navbar)

Penjelasan: Disediakan bilah navigasi utama di bagian atas sehingga pengguna dapat dengan mudah mengakses ke halaman Beranda, Tentang Kami, dan Kontak.

📸 Hasil Screenshot Tampilan Website

1. Halaman Beranda (Home)

2. Halaman Tentang Kami (About)

3. Halaman Kontak (Contact)

📁 Struktur File Utama (Views)

LaraPress/
└── resources/views/
    ├── welcome.blade.php       # Halaman Utama / Beranda
    ├── about.blade.php         # Halaman Tentang Kami
    └── contact.blade.php       # Halaman Kontak


⚙️ Cara Menjalankan Proyek (How to Run)

Follow these steps to run the project locally on your machine:

Clone Repositori:

git clone https://github.com/KholilIrsyadMarwan/4524210110-KHOLILIRSYADMARWAN-PBW-A-Praktikum3.git


Masuk ke Folder Proyek:

cd 4524210110-KHOLILIRSYADMARWAN-PBW-A-Praktikum3/LaraPress


Install Dependencies (Jika Diperlukan):

composer install


Jalankan Server Lokal Laravel:

php artisan serve


Akses Aplikasi di Browser:

Beranda: http://127.0.0.1:8000

Tentang Kami: http://127.0.0.1:8000/about

Kontak: http://127.0.0.1:8000/kontak
