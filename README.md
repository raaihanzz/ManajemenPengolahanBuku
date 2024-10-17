<<<<<<< HEAD
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

=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 20f0b5a (DotIntership DONE)
