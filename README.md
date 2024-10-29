# Sistem Program Sederhana - Manajemen Kategori Buku

Saya membuat sistem program sederhana yang saya rancang untuk mengelola data kategori buku di perpustakaan atau di toko buku. Program ini memungkinkan pengguna untuk mengatur, menambah, mengubah, dan menghapus kategori buku, sehingga memudahkan pengelolaan koleksi buku berdasarkan jenis atau tema tertentu.

## Fitur Utama 
1. CRUD Kategori Buku:
   - Pengguna dapat menambah kategori baru untuk mengelompokkan buku berdasarkan genre, topik, atau kategori tertentu.
   - Pengguna juga dapat melihat daftar semua kategori yang telah dibuat.
   - Sitem program memungkinkan pengguna Admin untuk mengedit informasi kategori yang ada.
   - Pengguna Admin dapat menghapus kategori buku yang tidak lagi diperlukan.

2. Relasi dengan Buku:
   Setiap kategori dapat dihubungkan dengan beberapa buku, memudahkan pengelolaan informasi buku berdasarkan kategori tertentu.

3. API untuk Melakukan Pencarian Buku:
   API ini mendukung operasi pencarian buku, seperti melakukan pencarian **Judul**, **Author**, **Kategori**, dan **Tahun Tanggal Terbit**.

## Desain Database

1. **books**: Tabel buku yang menyimpan data utama.
   - Kolom: `id`, `title`, `author`, `category_id`, `published_at`.

2. **categories**: Tabel yang memiliki relasi one-to-many dengan tabel _books_.
   - Kolom: `id`, `name`.
  
![Tabel Diagram Manajemen Kategori Buku](https://github.com/user-attachments/assets/55cfda3f-5386-4660-bcea-5dd22c4e7599)

**Relasi**: Satu entitas dari **_Table Categories_** dapat memiliki banyak entitas di **_Table Books_** (one-to-many).

## API Endpoint (BELUM DI EDIT)
Berikut daftar endpoint yang tersedia:

1. **GET /api/table1** - Menampilkan list data dari tabel 1
2. **GET /api/table1/{id}** - Menampilkan detail data dari tabel 1 berdasarkan ID
3. **GET /api/table2** - Menampilkan list data dari tabel 2
4. **GET /api/table2/{id}** - Menampilkan detail data dari tabel 2 berdasarkan ID
5. **GET /api/search?q={keyword}** - Mencari data berdasarkan kata kunci
