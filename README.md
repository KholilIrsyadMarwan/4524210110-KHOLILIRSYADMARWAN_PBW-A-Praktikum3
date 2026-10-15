<div align="center">

# 📘 LAPORAN PRAKTIKUM PERTEMUAN KE - 3
### 🧑‍🎓 Kholil Irsyad Marwan - 4524210110
<br>

# 🚀 Website LaraPress
*Laporan ini disusun untuk memenuhi Tugas Praktikum 3 Pemrograman Berbasis Web*  

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade">
</p>

</div>

---

## 🎯 Tentang Aplikasi

**LaraPress** adalah aplikasi portofolio interaktif berbasis **Laravel 12** yang dirancang untuk menampilkan profil profesional, metodologi pemrosesan data, serta saluran komunikasi dan repositori proyek secara terintegrasi.

---

## 📌 Soal Tugas Praktikum

1. Buat satu halaman statis baru bernama **"Kontak"**.
2. Halaman ini harus bisa diakses melalui URL `/kontak`[cite: 3].
3. Isi halaman tersebut dengan informasi kontak fiktif (misal: email dan nomor telepon)[cite: 3].
4. Jangan lupa tambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya[cite: 3].

---
### **Jawaban:**
### 1. Membuat Halaman Kontak
<img width="1057" height="500" alt="1" src="https://github.com/user-attachments/assets/6a800f14-5f8a-4621-aec9-c0c8bc050ded" />
Penjelasan : Tampilan ini berisikan beberapa informasi seperti email pribadi,serta link github.

### 2. Bisa akses url Kontak
<img width="962" height="477" alt="Baru1" src="https://github.com/user-attachments/assets/fc22ca31-04f6-4b54-916b-f8dce1f8ca98" /><br>
Dari halaman Beranda bisa akses link ke halaman Kontak begitu juga sebaliknya.<br>
<img width="462" height="339" alt="Baru2" src="https://github.com/user-attachments/assets/dc9084e3-967d-468d-ae05-b608d6fe9391" /><br>
Dari halaman Tentang Kami bisa akses link ke halaman Kontak begitu juga sebaliknya.<br>

---

### 3. Halaman kontak ada Email dan lainnya
<img width="678" height="456" alt="4" src="https://github.com/user-attachments/assets/7fceece8-ad39-451c-9d65-8b7c8c1bb4eb" /><br>
Disini saya menggunakan email dan instagram.<br>

---

### 4. Menu navigasi
<img width="521" height="104" alt="5" src="https://github.com/user-attachments/assets/4ee12837-c774-4b8d-b9c0-013ba88c00ba" /><br>
Jadi kita bisa mengakses ke halaman beranda, tentang kami dan kontak.<br>

---

## ✨ Fitur Utama

- ✅ **Halaman Kontak (`/kontak`)** - Menyajikan informasi saluran komunikasi resmi (Email Mahasiswa & Instagram) serta tautan repositori GitHub.
- ✅ **Navigasi Interaktif** - *Navbar* terintegrasi yang memudahkan perpindahan antar halaman (Beranda, Tentang Kami, Kontak).
- ✅ **Dark Mode UI** - Desain antarmuka modern dengan skema warna gelap yang bersih dan nyaman dibaca.
- ✅ **Call to Action (CTA)** - Tombol navigasi cepat antar halaman di bagian bawah kartu informasi.
- ✅ **Multi-Halaman Statis** - Terdiri dari Beranda, Tentang Kami, dan Kontak.

---

## 🛠️ Tech Stack

### Backend & Framework
- **Laravel 12.x** - PHP Framework
- **PHP ^8.2** - Programming Language
- **Blade Engine** - Templating System

### Frontend
- **Tailwind CSS** - CSS Framework
- **Responsive Layout** - Modern UI Design

---

## 📸 Hasil Screenshot Tampilan Website LaraPress

### 1. Halaman Beranda (`/`)
Tampilan utama portofolio interaktif yang menyajikan ringkasan profil, keahlian utama, dan tombol aksi navigasi cepat.
   <img width="1600" height="739" alt="Beranda" src="https://github.com/user-attachments/assets/7acb88e2-be7b-4f7c-9333-bcfc5961694e" /> <br>

---

### 2. Halaman Tentang Kami (`/about`)
Menampilkan biografi ringkas beserta alur kerja pemrosesan data (*Data Cleaning*, *EDA*, dan *Prototyping*).
<img width="1600" height="728" alt="About" src="https://github.com/user-attachments/assets/0242c721-78d8-491f-9b6e-477b06364602" />

---

### 3. Halaman Kontak (`/kontak`)
Halaman khusus kontak yang menampilkan Email Mahasiswa (`marwansi4524110@univpancasila.ac.id`), Profil Instagram (`@Kholil_Irsyad_Marwan`), serta tautan repositori GitHub.
<img width="1600" height="760" alt="Kontak" src="https://github.com/user-attachments/assets/2d0cdea1-b5ed-4fb4-a259-d68659b2b96c" />

---
⚙️ Cara Menjalankan Proyek 
1. Clone Repositori
Bash
git clone [[https://github.com/KholilIrsyadMarwan/4524210110-KHOLILIRSYADMARWAN-PBW-A-Praktikum3.git]](https://github.com/KholilIrsyadMarwan/4524210110-KHOLILIRSYADMARWAN_PBW-A-Praktikum3.git).
2. Masuk ke Folder Proyek
Bash
cd 4524210110-KHOLILIRSYADMARWAN-PBW-A-Praktikum3/LaraPress
3. Install Dependencies (Jika Diperlukan)
Bash
composer install
4. Setup Environment File
Bash
cp .env.example .env
php artisan key:generate
5. Jalankan Server Lokal
Bash
php artisan serve
