# MacaHyuK – Web Perpustakaan Digital

MacaHyuK adalah aplikasi web perpustakaan digital yang memungkinkan pengguna untuk mengakses koleksi buku, melakukan peminjaman, serta mengelola data perpustakaan melalui peran User dan Admin.  
Aplikasi ini dikembangkan menggunakan PHP dan MySQL, serta dirancang untuk berjalan pada local web server seperti XAMPP atau Laragon.

---

## Table of Contents

- [MacaHyuK – Web Perpustakaan Digital](#macahyuk--web-perpustakaan-digital)
- [Overview Aplikasi](#overview-aplikasi)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Instalasi dan Menjalankan Aplikasi](#instalasi-dan-menjalankan-aplikasi)
  - [Clone Repository](#1-clone-repository)
  - [Setup Database](#2-setup-database)
  - [Konfigurasi Aplikasi](#3-konfigurasi-aplikasi)
  - [Akses Aplikasi](#4-akses-aplikasi)
- [Akun Demo](#akun-demo)
- [Role dan Fitur](#role-dan-fitur)
  - [User](#user)
  - [Admin](#admin)
- [Catatan untuk Reviewer](#catatan-untuk-reviewer)
- [Kontributor/Anggota Kelompok](#Kontributor/Anggota-Kelompok)

## Overview Aplikasi

Berikut adalah beberapa tampilan utama aplikasi (gambar diambil dari folder `/images/`).  
Tampilan disusun menggunakan HTML agar tidak melebar dan tetap rapi saat dibuka.

<div style="display:grid; grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:16px;">
  <img src="images/Screenshot 2025-12-25 083748.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083758.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083804.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083822.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083832.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083838.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083844.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083849.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083908.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 083956.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084004.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084016.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084032.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084047.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084105.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084120.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084148.png" style="width:100%; border-radius:8px;">
  <img src="images/Screenshot 2025-12-25 084159.png" style="width:100%; border-radius:8px;">
</div>

---

## Teknologi yang Digunakan

- PHP (Native)
- MySQL
- HTML, CSS, JavaScript
- Web Server: XAMPP atau Laragon

---

## Instalasi dan Menjalankan Aplikasi

### 1. Clone Repository

```bash
git clone https://github.com/username/macahyuk.git
```

Letakkan folder project di root web server:
- `C:\xampp\htdocs\` (XAMPP)
- `laragon\www\` (Laragon)

---

### 2. Setup Database

1. Buka phpMyAdmin
2. Buat database baru dengan nama:

```sql
macahyuk
```

3. Pilih database `macahyuk`
4. Import file `perpus.sql` yang berada di root project

---

### 3. Konfigurasi Aplikasi

Konfigurasi default mengasumsikan aplikasi berada di root web server.

Jika diperlukan, path dapat disesuaikan pada file berikut:

- Untuk User:
  ```
  macahyuk/config.php
  ```

- Untuk Admin:
  ```
  macahyuk/admin/config.php
  ```

---

### 4. Akses Aplikasi

Aplikasi dapat diakses melalui browser pada alamat:

```
http://localhost/macahyuk/macahyuk
```

---

## Akun Demo

### Akun User
- Email: demouser@test.com
- Password: password

### Akun Admin
- Email: demoadmin@test.com
- Password: password

Pengguna juga dapat melakukan registrasi akun baru melalui halaman pendaftaran.

---

## Role dan Fitur

### User
- Registrasi dan Login
- Melihat koleksi buku
- Melakukan peminjaman buku
- Melihat riwayat peminjaman

### Admin
- Login Admin
- Mengelola data buku
- Mengelola data pengguna
- Mengelola transaksi peminjaman

---

## Catatan untuk Reviewer

- Aplikasi dijalankan secara local
- Database disertakan untuk mempermudah pengujian
- Struktur kode dipisahkan antara User dan Admin
- Tidak memerlukan layanan atau API eksternal


## Kontributor/Anggota Kelompok

1. Hanif Brian Gyimnastiar 23-036
2. Maulana Ardiansyah 23-159
3. Bayu Firmansyah 23-002
4. Wafa' Amatul Azizah 23-018

Link Website : https://macahyuk.kesug.com
