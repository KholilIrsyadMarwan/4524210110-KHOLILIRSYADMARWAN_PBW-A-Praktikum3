<div align="center">

# LAPORAN PRAKTIKUM 
*Laporan ini disusun untuk memenuhi Tugas Praktikum 3 Pemrograman Berbasis Web*

**Dosen Pengampu:** Bambang Riono Arsad, S.Kom., MMSI

<br>

<img width="286" height="242" alt="Logo Universitas Pancasila" src="https://github.com/user-attachments/assets/d8d471db-090b-48c4-995b-b6b4ee89218b" />

<br>
<br>

<u><b>Oleh :</b></u>

<u>Nama :</u> **Kholil Irsyad Marwan**  
<u>NPM :</u> **4524210110**  

<br>

### **PROGRAM STUDI TEKNIK INFORMATIKA**
### **FAKULTAS TEKNIK**
### **UNIVERSITAS PANCASILA**
### **2026/2027**

<br>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade">
</p>

</div>

---

### **Soal:**
1. Buat satu halaman statis baru bernama **"Kontak"**.
2. Halaman ini harus bisa diakses melalui URL `/kontak`.
3. Isi halaman tersebut dengan informasi kontak fiktif (misal: email dan nomor telepon).
4. Jangan lupa tambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya.

---

### **Jawaban:**

### 1. Membuat Halaman Kontak
<img width="1057" height="500" alt="1" src="https://github.com/user-attachments/assets/6a800f14-5f8a-4621-aec9-c0c8bc050ded" />

**Penjelasan:** Tampilan ini berisikan beberapa informasi seperti email pribadi, serta link github.

<br>

### 2. Bisa Akses URL Kontak
<img width="962" height="477" alt="Baru1" src="https://github.com/user-attachments/assets/fc22ca31-04f6-4b54-916b-f8dce1f8ca98" />

Dari halaman Beranda bisa akses link ke halaman Kontak begitu juga sebaliknya.

<br>

<img width="462" height="339" alt="Baru2" src="https://github.com/user-attachments/assets/dc9084e3-967d-468d-ae05-b608d6fe9391" />

Dari halaman Tentang Kami bisa akses link ke halaman Kontak begitu juga sebaliknya.

---

### 3. Halaman Kontak ada Email dan Lainnya
<img width="678" height="456" alt="4" src="https://github.com/user-attachments/assets/7fceece8-ad39-451c-9d65-8b7c8c1bb4eb" />

Disini saya menggunakan email dan instagram.

---

### 4. Menu Navigasi
<img width="521" height="104" alt="5" src="https://github.com/user-attachments/assets/4ee12837-c774-4b8d-b9c0-013ba88c00ba" />

Jadi kita bisa mengakses ke halaman beranda, tentang kami, dan kontak.

---

## 🖥️ Halaman Tersedia

1. **Beranda / Home**  
   <img width="1600" height="739" alt="Beranda" src="https://github.com/user-attachments/assets/7acb88e2-be7b-4f7c-9333-bcfc5961694e" />  
   Tampilan menyajikan ringkasan profil, minat utama, dan tombol aksi navigasi cepat.

2. **Tentang Kami / About**  
   <img width="1600" height="728" alt="About" src="https://github.com/user-attachments/assets/0242c721-78d8-491f-9b6e-477b06364602" />  
   Tampilan biografi ringkas beserta metodologi dan alur kerja pemrosesan data.

3. **Kontak / Contact**  
   <img width="1600" height="760" alt="Kontak" src="https://github.com/user-attachments/assets/2d0cdea1-b5ed-4fb4-a259-d68659b2b96c" />  
   Tampilan pusat saluran komunikasi resmi untuk diskusi akademik, profil sosial media, serta repositori kode di GitHub.

---

## 📁 Struktur File Views

```text
LaraPress/
└── resources/views/
    ├── welcome.blade.php       # Halaman Utama / Beranda
    ├── about.blade.php         # Halaman Tentang Kami
    └── contact.blade.php       # Halaman Kontak
