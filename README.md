# iuran_makam

Sistem pengelolaan iuran makam sederhana berbasis PHP dan MySQL.

Repository GitHub:
- https://github.com/milamila01/iuran_makam

## Tentang Aplikasi

Aplikasi ini digunakan untuk mengelola data warga, mencatat pembayaran iuran makam, serta melihat laporan pembayaran secara sederhana.

## Fitur

- Dashboard ringkas untuk melihat ringkasan data
- Manajemen data warga
- Input pembayaran iuran
- Laporan pembayaran
- Login sederhana untuk mengakses sistem

## Teknologi yang Digunakan

- PHP
- MySQL
- MariaDB / MySQL melalui Laragon
- HTML + CSS sederhana

## Persyaratan

- XAMPP/Laragon atau server PHP/MySQL
- Browser web
- Database MySQL dengan nama `iuran_makam`

## Instalasi

1. Clone repository ini:
   ```bash
   git clone https://github.com/milamila01/iuran_makam.git
   ```
2. Pindahkan folder project ke direktori web server Anda, misalnya `C:\laragon\www\`.
3. Buat database MySQL dengan nama `iuran_makam`.
4. Sesuaikan konfigurasi database pada file `koneksi.php` jika diperlukan.
5. Buka aplikasi melalui browser.

## Struktur File Utama

- `dashboard.php` – halaman utama/dashboard
- `warga.php` – daftar warga
- `pembayaran.php` – daftar pembayaran
- `laporan.php` – laporan pembayaran
- `tambah_warga.php` – form tambah warga
- `tambah_pembayaran.php` – form tambah pembayaran
- `login.php` – halaman login
- `koneksi.php` – koneksi database

## Identitas

- Nama: Armilatul Fuadah
- NIM/Kelas: 101230087/TF23C
