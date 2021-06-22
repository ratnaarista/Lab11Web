# Nama : Ratna Arista
# NIM  : 311910441
# Kelas : TI.19.A.2
# Praktikum 11 - PHP Framework

Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan:

php-json ekstension untuk bekerja dengan JSON;
php-mysqlnd native driver untuk MySQL;
php-xml ekstension untuk bekerja dengan XML;
php-intl ekstensi untuk membuat aplikasi multibahasa;
libcurl (opsional), jika ingin pakai Curl.
Untuk mengaktifkan ekstentsi tersebut melalui XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini
![xampp](https://user-images.githubusercontent.com/56379930/122051358-b6670180-ce0e-11eb-9898-a25aea2cbccc.png)
![extansion](https://user-images.githubusercontent.com/56379930/122051415-c4b51d80-ce0e-11eb-8986-9082ffddee31.png)

Kemudian buat folder baru dengan nama **lab11_php_ci** pada doc root webserver **(htdocs)**

![file](https://user-images.githubusercontent.com/56379930/122052591-0a261a80-ce10-11eb-8646-a916671ab346.png)
# Installasi CODEIGNITER
Ada dua cara installasi Codeigniter, yaitu cara manual dan menggunakan composer. Pada praktik kali ini menggunakan cara manual:

Unduh Codeigniter dari website https://codeigniter.com/download
Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
Ubah nama direktory framework-4.x.xx menjadi ci4.
Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![welcome](https://user-images.githubusercontent.com/56379930/122051450-cf6fb280-ce0e-11eb-8daa-f822fdd49702.png)
# Menjalankan CLI (Command Line Interface)
Arahkan lokasi direktori sesuai dengan direktori kerja project yang sudah dibuat (xampp/htdocs/lab11_php_ci/ci4/)

![php 1](https://user-images.githubusercontent.com/56379930/122051530-e6aea000-ce0e-11eb-93d1-8398db16c0e9.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah php spark

![php spark](https://user-images.githubusercontent.com/56379930/122051574-f332f880-ce0e-11eb-9a3c-b7b7d1447049.png)

Mengaktifkan Mode Debugging pada Codeigniter
![whoops](https://user-images.githubusercontent.com/56379930/122051622-00e87e00-ce0f-11eb-88be-320bef906069.png)

# Membuat Route baru
Tambahkan kode berikut di dalam `app/config/Routes.php`
![routes](https://user-images.githubusercontent.com/56379930/122883217-2b828b80-d367-11eb-8559-6ba6454c17cb.png)
untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut
![p11](https://user-images.githubusercontent.com/56379930/122883271-3b9a6b00-d367-11eb-9a62-0811bc0eaf18.png)

# Membuat Controller
Buat file baru dengan nama `page.php` pada `direktori Controller` kemudian isi kodenya seperti berikut
![page php](https://user-images.githubusercontent.com/56379930/122883415-5ec51a80-d367-11eb-9544-9da3ad7451ba.png)
selanjutnya refresh kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.
# Auto Route
![sehabis page](https://user-images.githubusercontent.com/56379930/122883423-61c00b00-d367-11eb-9d01-22bfb83bba11.png)
![style](https://user-images.githubusercontent.com/56379930/122883568-89af6e80-d367-11eb-9a27-c7d988f3a17a.png)
![template](https://user-images.githubusercontent.com/56379930/122883589-8fa54f80-d367-11eb-8588-f203dba58691.png)
![halaman about output](https://user-images.githubusercontent.com/56379930/122883934-d7c47200-d367-11eb-870a-54a7392a3025.png)
