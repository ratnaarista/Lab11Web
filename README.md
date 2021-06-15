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
