<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

# 🍪 JeeyCookie — Laravel Web App

JeeyCookie adalah website toko kue modern berbasis **Laravel Framework** yang menampilkan informasi produk, promosi, dan metode pembayaran.  
Dibuat sebagai bagian dari **Asessment 1** untuk mata kuliah *Web Programming*.

---

## 👩‍💻 Team Member
| Nama | NIM |
|------|--------|
| **Latifah Fauzia** | 2310120008 |
| **Muhamad Kaisar Hudayef** | 2310130007 |
| **Muhammad Irfan Janur** | 2310130009 |

---

## 📚 Fitur Utama

- 🏠 **Home Page** – Tampilan utama dengan banner & highlight produk.  
- 🍪 **About Page** – Profil JeeyCookie dan nilai usaha.  
- 🧁 **Program Page** – Halaman dinamis `/program/{id}` untuk menampilkan event atau promo.  
- 💳 **Payment Page** – Metode pembayaran via Bank Jago dan QRIS.  
- 💬 **Contact Page** – Form kontak dengan pengiriman data ke controller.  
- ⚠️ **404 Page** – Fallback route untuk halaman yang tidak ditemukan.  

---

## ⚙️ Komponen Laravel

| Komponen | Implementasi |
|-----------|---------------|
| **Route** | Semua route didefinisikan di `routes/web.php`. |
| **Controller** | `ContactController` menangani form contact. |
| **Blade Template** | Menggunakan `@extends`, `@yield`, `@section`, `@csrf`, dan partials. |
| **Layout Design** | Template utama di `resources/views/layouts/app.blade.php`. |
| **CSS Framework** | Menggunakan **Bootstrap 5.3** (via CDN) dengan tema warna JeeyCookie. |

---

## 🧱 Struktur Folder
jeeycookie/
├── app/Http/Controllers/ContactController.php
├── resources/
│ └── views/
│ ├── layouts/app.blade.php
│ ├── partials/
│ │ ├── header.blade.php
│ │ └── footer.blade.php
│ └── pages/
│ ├── home.blade.php
│ ├── about.blade.php
│ ├── program.blade.php
│ ├── payment.blade.php
│ ├── contact.blade.php
│ └── 404.blade.php
├── routes/web.php
└── public/images/