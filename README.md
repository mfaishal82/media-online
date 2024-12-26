<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Tentang Proyek

Ini adalah repository untuk tugas Final Project dengan tema Media Online.
 Proyek ini dibuat menggunakan:
* [Laravel](https://laravel.com)
* [Bootstrap](https://getbootstrap.com/)
* [MySQL](https://www.mysql.com)
* Beberapa sumber template 
  - (http://www.wpthemedesigner.com/)
  - (https://colorlib.com/polygon/cooladmin/index.html)

Fitur yang tersedia:
* Sistem Autentikasi (Login)
* Manajemen Berita
* Manajemen Kategori
* Dashboard Admin
* Antarmuka untuk pengguna

## Instalasi

### Requirements
* [XAMPP](https://www.apachefriends.org/download.html) / [PHP](https://www.php.net/downloads.php)
* [Composer](https://getcomposer.org/)

### Langkah Instalasi
* Pastikan semua requirements sudah diinstall dan dikonfigurasi dengan benar
* Ketik perintah dibawah ini secara berturut-turut di cmd : 
```
git clone https://github.com/mfaishal82/media-online

cd media-online
composer install
->buat file .env dan copy dari example env
php artisan migrate
php artisan db:seed
php artisan key:generate
```
* Untuk menjalankan server, ketik perintah berikut di terminal 
```
php artisan serve
```
* atau ketik perintah berikut
```
composer run dev
```
* Untuk login ke admin bisa gunakan:
```
email: admin@mail.com
password: 12345678
```
* Buka browser dan ketikkan `http://localhost:8000/admin` di address bar untuk membuka halaman admin. Dan `http://localhost:8000` untuk membuka halaman website

<p align="right">(<a href="#top">back to top</a>)</p>

