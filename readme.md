# Soal UTS Web Lanjut

* Sifat: Open All
* Waktu: 120 menit (2 jam)

Aplikasi ini merupakan base application yang akan digunakan untuk mengerjakan soal-soal UTS pemrograman web lanjut. Silahkan `fork` repository ini kemudian clone repository `uts-web` yang ada di akun github masing-masing untuk mengerjakan soal UTS pemrograman web.

> Pengumpulan UTS dilakukan dengan cara melakukan `push` ke akun github masing-masing. Melalui akun-akun tersebut saya akan meng-clone dan mencoba apakah aplikasi yang dibuat berhasil dijalankan sesuai dengan requirement yang diberikan atau tidak.

## Persiapan

Demi kelancaran pengerjaan project UTS praktikum pemrograman web lanjut ini diharapkan rekan-rekan sudah menyiapkan tools dibawah ini:

1. Composer
2. PHP >= 5.5.9 (dan PHP Cli)
3. PHP-PDO MySQL (bisa diinstall melalui `sudo apt-get install php5-mysql`)
4. dan dependency Laravel lainnya seperti yang ada di dalam [dokumentasinya](https://laravel.com/docs/5.2/installation#server-requirements).

## Langkah-langkah pengerjaan

1. `Fork` repository `uts-web` ini.
2. Pastikan project `uts-web` sudah berada di akun github masing-masing misal `fulan/uts-web`.
3. Clone project `uts-web` ke komputer / laptop yang akan digunakan untuk mengerjakan UTS.
4. Buka terminal, masuk kedalam direktori `uts-web`.
5. Jalankan `composer install` untuk mengunduh setiap dependency yang dibutuhkan Laravel.
6. Buat database mysql dengan nama `uts_web`.
7. Edit file `.env` (copy dari file `.env.example`)

        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=uts_web
        DB_USERNAME=user_mysql
        DB_PASSWORD=password_mysql

8. Jalankan `php artisan migrate` untuk menginstall tabel yang disediakan.
9. Jalankan `php artisan serve` untuk mengaktifkan internal web server Laravel.
10. Buka web browser dan akses alamat `http://localhost:8000`.

## Apa yang harus dikerjakan untuk UTS ini?

Berikut ini adalah daftar tugas yang harus dikerjakan untuk UTS pemrograman web lanjut:

1. Buat mekanisme penyimpanan inventaris barang. Pada saat data disubmit dari [formulir](http://localhost:8000/form) penambahan barang, data tersebut harus dimasukkan kedalam database.

    ![Inventory Form](http://s10.postimg.org/3moqehxc9/inventory_form.png)

2. Tampilkan setiap data inventaris barang yang ada di dalam database kedalam bentuk tabel seperti yang dicontohkan pada halaman [daftar inventaris barang](http://localhost:8000).

    ![Inventory List](http://s12.postimg.org/912kw6a3h/inventory_list.png)

3. Tampilkan detail setiap inventaris barang pada saat link barang di klik. silahkan gunakan mekanisme `route parameter` seperti yang ada di [dokumentasi](https://laravel.com/docs/5.2/controllers#basic-controllers) Laravel.

    ![Inventory Detail](http://s27.postimg.org/v29ppfbsj/inventory_detail.png)

## Mekanisme pengumpulan UTS

Mekanisme pengumpulan dan penilaian akan dilakukan dari repository Github.com. Untuk melakukan pengumpulan UTS kali ini silahkan buka terminal, commit pekerjaan anda dengan menggunakan perintah `git add --all` kemudian `git commit -m "pengumpulan UTS"` dan `git push origin master`.

Catatan:

1. Jangan lupa untuk mendaftarkan akun Github anda di [thread UTS ini](http://elen.nurulfikri.ac.id/mod/forum/discuss.php?d=12).
2. Jika terdapat masalah dalam pengerjaan UTS, silahkan laporkan di [thread UTS ini](http://elen.nurulfikri.ac.id/mod/forum/discuss.php?d=13)

## Submitted

Herpiko Dwi Aguno / 0110215036
