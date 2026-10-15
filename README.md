<div align="center">

# 📘 LAPORAN PRAKTIKUM PERTEMUAN KE - 3
### 🧑‍🎓 Kholil Irsyad Marwan - 4524210110

<br>

<img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Logo_Universitas_Pancasila.png" width="160" alt="Logo Universitas Pancasila">

<br>

### **PROGRAM STUDI TEKNIK INFORMATIKA - FAKULTAS TEKNIK**
### **UNIVERSITAS PANCASILA**
**2026/2027**

<br>

# 🚀 Website Portofolio Interaktif (LaraPress)
*Laporan ini disusun untuk memenuhi Tugas Praktikum 3 Pemrograman Berbasis Web*  
**Dosen Pengampu:** Bambang Riono Arsad, S.Kom., MMSI

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

## ✨ Fitur Utama

- ✅ **Halaman Kontak (`/kontak`)** - Menyajikan informasi saluran komunikasi resmi (Email Mahasiswa & Instagram) serta tautan repositori GitHub[cite: 3, 5].
- ✅ **Navigasi Interaktif** - *Navbar* terintegrasi yang memudahkan perpindahan antar halaman (Beranda, Tentang Kami, Kontak)[cite: 3, 5].
- ✅ **Dark Mode UI** - Desain antarmuka modern dengan skema warna gelap yang bersih dan nyaman dibaca[cite: 3].
- ✅ **Call to Action (CTA)** - Tombol navigasi cepat antar halaman di bagian bawah kartu informasi[cite: 3].
- ✅ **Multi-Halaman Statis** - Terdiri dari Beranda, Tentang Kami, dan Kontak[cite: 3, 6].

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
<img width="1600" alt="Halaman Beranda" src="https://github.com/user-attachments/assets/b11e164c-d99c-4991-8370-9544be4a1ea5" />

---

### 2. Halaman Tentang Kami (`/about`)
Menampilkan biografi ringkas beserta alur kerja pemrosesan data (*Data Cleaning*, *EDA*, dan *Prototyping*)[cite: 6].
<img width="1600" alt="Halaman Tentang Kami" src="https://github.com/user-attachments/assets/07a6f543-1bb8-4d7b-8025-61f534576c77" />

---

### 3. Halaman Kontak (`/kontak`)
Halaman khusus kontak yang menampilkan Email Mahasiswa (`marwansi4524110@univpancasila.ac.id`), Profil Instagram (`@Kholil_Irsyad_Marwan`), serta tautan repositori GitHub[cite: 3, 5].
<img width="1600" alt="Halaman Kontak" src="https://github.com/user-attachments/assets/077cc92d-0825-4080-969f-db7b63576bdd" />

---

### 4. Detail Komponen Halaman Kontak & Navigasi

* **Informasi & Media Sosial:**
  <img width="1600" alt="Detail Kontak" src="https://github.com/user-attachments/assets/388e10f6-0c5f-4f1a-847c-e9dc4646065e" />

* **Menu Navigasi Utama:**
  <img width="1600" alt="Menu Navigasi" src="https://github.com/user-attachments/assets/eb97a2c8-2305-4f6e-b58f-444688327223" />

---

## 📁 Struktur File Views

```text
LaraPress/
└── resources/views/
    ├── welcome.blade.php       # Halaman Utama / Beranda
    ├── about.blade.php         # Halaman Tentang Kami
    └── contact.blade.php       # Halaman Kontak
