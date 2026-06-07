# DAMAKESMAS Frontend

Frontend website **DAMAKESMAS (Denpasar Mantap Kesehatan Masyarakat)** yang dikembangkan menggunakan PHP Native, Tailwind CSS, dan JavaScript.

## Teknologi

- PHP Native
- Tailwind CSS
- Vanilla JavaScript

## Struktur Proyek

```text
damakesmas/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
├── components/
├── config/
├── layouts/
├── pages/
├── docs/
├── index.php
└── README.md
```

## Menjalankan Proyek

### Menggunakan XAMPP

1. Clone repository ke folder `htdocs`

```bash
git clone https://github.com/Putranarotama/Frontend-DAMAKESMAS.git
```

2. Jalankan Apache melalui XAMPP.

3. Buka browser:

```text
http://localhost/Frontend-DAMAKESMAS
```

### Menggunakan PHP Built-in Server

```bash
php -S localhost:8080
```

Buka:

```text
http://localhost:8080
```

## Layout System

Proyek menggunakan layout terpusat melalui:

```text
layouts/master.php
```

Setiap halaman hanya berisi konten dan dirender melalui master layout menggunakan:

```php
ob_start();

/* Konten halaman */

$content = ob_get_clean();

include '../layouts/master.php';
```

## Menambahkan Halaman Baru

1. Duplikat file `pages/profile.php`.
2. Ubah nilai `$page_title`.
3. Tambahkan konten halaman.
4. Tambahkan menu pada `components/navbar.php`.

## Konfigurasi

Konfigurasi URL proyek berada pada:

```text
config/config.php
```

Sistem menggunakan `BASE_URL` sehingga proyek dapat dijalankan pada nama folder apa pun tanpa perlu mengubah path secara manual.

## Tim Pengembang

DAMAKESMAS Frontend Project  

---

© 2025 DAMAKESMAS. All Rights Reserved.
