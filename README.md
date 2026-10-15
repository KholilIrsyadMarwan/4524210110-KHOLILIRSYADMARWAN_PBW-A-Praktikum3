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
## Instalasi

1. Clone Repositori <br>
git clone [https://github.com/KholilIrsyadMarwan/4524210110-KHOLILIRSYADMARWAN_PBW-A-Praktikum3.git].
2. Masuk ke Folder Proyek<br>
cd 4524210110-KHOLILIRSYADMARWAN-PBW-A-Praktikum3/LaraPress
3. Install Dependencies <br>
composer install
4. Setup Environment File <br>
cp .env.example .env <br>
php artisan
key:generate
6. Jalankan Server Lokal <br>
php artisan serve

---

## 📑 Daftar Isi

- [🎯 Tentang Aplikasi](#-tentang-aplikasi)
- [📌 Soal Tugas Praktikum](#-soal-tugas-praktikum)
- [📝 Jawaban & Pembahasan](#-jawaban)
- [📑 Fitur Halaman](#-fitur-halaman)
- [✨ Fitur Utama](#-fitur-utama)
- [🛠️ Tech Stack](#️-tech-stack)
- [📸 Hasil Screenshot Tampilan Website LaraPress](#-hasil-screenshot-tampilan-website-larapress)


---
## 🎯 Tentang Aplikasi

**LaraPress** adalah aplikasi portofolio interaktif berbasis **Laravel 12** yang dirancang untuk menampilkan profil profesional, metodologi pemrosesan data, serta saluran komunikasi dan repositori proyek secara terintegrasi.

---

## 📌 Soal Tugas Praktikum

1. Buat satu halaman statis baru bernama **"Kontak"**.
2. Halaman ini harus bisa diakses melalui URL `/kontak`.
3. Isi halaman tersebut dengan informasi kontak fiktif (misal: email dan nomor telepon).
4. Jangan lupa tambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya.

---
### **Jawaban & Pembahasan:**
### 1. Membuat Halaman Kontak
Tampilan ini berisikan beberapa informasi seperti email pribadi,serta link github.
<img width="1057" height="500" alt="1" src="https://github.com/user-attachments/assets/6a800f14-5f8a-4621-aec9-c0c8bc050ded" />


### 2. Bisa akses url Kontak
Dari halaman Beranda bisa akses link ke halaman Kontak begitu juga sebaliknya.<br>
<img width="962" height="477" alt="Baru1" src="https://github.com/user-attachments/assets/fc22ca31-04f6-4b54-916b-f8dce1f8ca98" /><br>
Dari halaman Tentang Kami bisa akses link ke halaman Kontak begitu juga sebaliknya.<br>
<img width="462" height="339" alt="Baru2" src="https://github.com/user-attachments/assets/dc9084e3-967d-468d-ae05-b608d6fe9391" /><br>


---

### 3. Halaman kontak ada Email dan lainnya
Disini saya menggunakan email dan instagram.<br>
<img width="678" height="456" alt="4" src="https://github.com/user-attachments/assets/7fceece8-ad39-451c-9d65-8b7c8c1bb4eb" /><br>


---

### 4. Menu navigasi
Jadi kita bisa mengakses ke halaman beranda, tentang kami dan kontak.<br>
<img width="521" height="104" alt="5" src="https://github.com/user-attachments/assets/4ee12837-c774-4b8d-b9c0-013ba88c00ba" /><br>


---
## 📑 Fitur Halaman

Aplikasi web ini memiliki 3 halaman statis utama:

1. **Halaman Home / Beranda (`/`)**
   - Menampilkan ringkasan profil pribadi, bidang keahlian (Data Science / Analytics), dan tombol navigasi cepat.
2. **Halaman Tentang Kami / About (`/about`)**
   - Menampilkan biografi singkat beserta metodologi dan alur kerja pemrosesan data (seperti *Data Cleaning*, *EDA*, dan *Prototyping*).
3. **Halaman Kontak / Contact (`/kontak`)**
   - Pusat saluran komunikasi interaktif yang menampilkan Email Mahasiswa, profil Instagram, serta tautan repositori GitHub[cite: 3].

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

