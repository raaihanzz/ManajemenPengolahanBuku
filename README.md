# Manajemen Pengolahan Buku

## Deskripsi
Sebuah aplikasi web sederhana yang dirancang untuk mengelola kategori buku di perpustakaan atau toko buku. Sistem ini memungkinkan pengguna melakukan operasi CRUD pada kategori buku dan menyediakan API pencarian untuk menemukan buku berdasarkan kategori.

## Fitur
- Operasi Create, Read, Update, dan Delete (CRUD) untuk kategori buku
- Menghubungkan kategori dengan buku
- API pencarian untuk pengambilan buku berdasarkan kategori

## Instalasi
1. Clone repositori:
    git clone https://github.com/raaihanzz/ManajemenPengolahanBuku.git

2. Arahkan ke direktori proyek:
    cd ManajemenPengolahanBuku

3. Instal dependensi:
    composer install
   
## Penggunaan
Untuk menjalankan aplikasi, siapkan server lokal dan akses melalui browser web Anda.

## API Endpoints
- **GET /api/categories** - Mengambil semua kategori
- **POST /api/categories** - Membuat kategori baru
- **PUT /api/categories/{id}** - Memperbarui kategori yang ada
- **DELETE /api/categories/{id}** - Menghapus kategori

## Desain Basis Data
Desain rinci skema basis data dapat ditemukan di repositori.

## Kontribusi
Kontribusi sangat diterima! Silakan buka isu atau ajukan pull request.

## Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT.
