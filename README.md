# Sistem Informasi Klinik Bidan

Sistem Informasi Klinik Bidan adalah aplikasi berbasis web yang dibangun menggunakan Laravel 10 (dengan kompatibilitas PHP 8.1) untuk membantu manajemen operasional klinik bidan.

## Fitur Utama

### Halaman Publik (Tanpa Login)
- **Profil Klinik & Bidan**: Informasi mengenai klinik dan tenaga medis.
- **Layanan**: Daftar layanan kesehatan (Imunisasi, Kehamilan, KB, Persalinan).
- **Daftar Obat**: Informasi ketersediaan obat.
- **FAQ Kesehatan**: Tanya jawab seputar kesehatan ibu dan anak.
- **Pendaftaran Pasien**: Formulir pendaftaran mandiri untuk pasien baru.
- **Sinkronisasi Antrian**: Tampilan nomor antrian yang sedang dipanggil secara real-time.

### Dashboard Admin (Login Diperlukan)
- **Statistik**: Ringkasan data pasien, antrian, dan transaksi.
- **Manajemen Antrian**: Memanggil dan menyelesaikan antrian pasien.
- **Manajemen Pasien**: CRUD data pasien.
- **Manajemen Obat**: CRUD stok dan harga obat.
- **Transaksi & Billing**: Pencatatan transaksi pembayaran.
- **Laporan**: Ringkasan laporan operasional klinik.

## Teknologi yang Digunakan
- **Framework**: Laravel 10
- **Autentikasi**: Laravel Breeze (Blade + Tailwind)
- **Database**: SQLite (Dikonfigurasi untuk kemudahan portabilitas di sandbox)
- **Frontend**: Tailwind CSS, Alpine.js

## Cara Instalasi (Lokal)
1. Clone repository ini.
2. Jalankan `composer install`.
3. Jalankan `npm install && npm run build`.
4. Salin `.env.example` ke `.env`.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate --seed`.
7. Jalankan `php artisan serve`.

## Akun Admin Default
- **Email**: admin@klinik.com
- **Password**: password
