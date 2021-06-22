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
![page](https://user-images.githubusercontent.com/56379930/122886460-2ffc7380-d36a-11eb-87df-609cf8a5f349.png)
Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.
# Auto Route
Tambahkan method baru pada Controller Page seperti berikut.
![page php](https://user-images.githubusercontent.com/56379930/122883415-5ec51a80-d367-11eb-9544-9da3ad7451ba.png)
![p11(2)](https://user-images.githubusercontent.com/56379930/122886472-338ffa80-d36a-11eb-93f3-d15e12f5fa31.png)
# Membuat View
Buat file baru dengan nama `about.php` pada direktori view `(app/view/about.php)` kemudian coding seperti berikut.
![sehabis page](https://user-images.githubusercontent.com/56379930/122883423-61c00b00-d367-11eb-9d01-22bfb83bba11.png)
![halaman about](https://user-images.githubusercontent.com/56379930/122887223-e2ccd180-d36a-11eb-82fc-58ce246e33cd.png)
# Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset `css` dan `javascript` terletak pada direktori `public`. Buat file css pada direktori public dengan nama `style.css`

![style](https://user-images.githubusercontent.com/56379930/122883568-89af6e80-d367-11eb-9a27-c7d988f3a17a.png)

Kemudian buat folder template pada direktori view kemudian buat file `header.php` dan `footer.php`

![template](https://user-images.githubusercontent.com/56379930/122883589-8fa54f80-d367-11eb-8588-f203dba58691.png)
File `app/view/template/footer.php`
![Footer](https://user-images.githubusercontent.com/56379930/122888191-cda47280-d36b-11eb-8edc-83f3fa1a6afa.png)
File `app/view/template/header.php`
![header](https://user-images.githubusercontent.com/56379930/122888208-d09f6300-d36b-11eb-815a-4b7130d1df9e.png)
![halaman about output](https://user-images.githubusercontent.com/56379930/122883934-d7c47200-d367-11eb-870a-54a7392a3025.png)

# Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

Update Controller `(page.php)`
![page update](https://user-images.githubusercontent.com/56379930/122889303-dfd2e080-d36c-11eb-96ec-2f5f0cd81b59.png)
Menu About
![about](https://user-images.githubusercontent.com/56379930/122889365-eeb99300-d36c-11eb-96ac-d8313819908a.png)
Menu Artikel
![artikel](https://user-images.githubusercontent.com/56379930/122889392-f6793780-d36c-11eb-8eac-8c0d75067f22.png)
Menu Contact
![contact](https://user-images.githubusercontent.com/56379930/122889416-fb3deb80-d36c-11eb-82e8-958860014d0c.png)
![halaman about output poto](https://user-images.githubusercontent.com/56379930/122889459-042ebd00-d36d-11eb-99e2-454a572452d0.png)

# Praktikum 12 - Framework Lanjutan (CRUD)
`Nama : Ratna Arista`
`NIM : 311910441`
`Kelas : TI.19.A.2`

Buat Database
![p12(1)](https://user-images.githubusercontent.com/56379930/122893229-56251200-d370-11eb-81f2-0017808b8b9d.png)
Buat Tabel
![p12(2)](https://user-images.githubusercontent.com/56379930/122893250-5ae9c600-d370-11eb-866b-eab3982aa2fd.png)
# Langkah 1 - Konfigurasi Koneksi Database
Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file `htdocs\lab11_php_ci\ci4\.env.`
![p12(3)](https://user-images.githubusercontent.com/56379930/122893274-61783d80-d370-11eb-9e8e-1ca04c9976d1.png)
# Langkah 2 - Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori `app/Models` dengan nama `ArtikelModel.php`
![p12(4)](https://user-images.githubusercontent.com/56379930/122893284-63da9780-d370-11eb-8255-f1256373750d.png)
# Langkah 3 - Membuat Controller
Buat Controller baru dengan nama `Artikel.php` pada direktori `app/Controllers.`
![p12(5)](https://user-images.githubusercontent.com/56379930/122893288-65a45b00-d370-11eb-8f7c-6c3e3cfa3be5.png)
# Langkah 4 - Membuat View
Buat folder baru dengan nama `artikel` pada direktori `app/views`, kemudian buat file baru dengan nama `index.php.`
![p12(6)](https://user-images.githubusercontent.com/56379930/122900714-20375c00-d377-11eb-9dd8-247143b8a110.png)

![p12(7)](https://user-images.githubusercontent.com/56379930/122900730-2299b600-d377-11eb-9b39-8a8576893cca.png)

![P12(8)](https://user-images.githubusercontent.com/56379930/122900740-2594a680-d377-11eb-9183-aabeafb9d5a6.png)
Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![p12(9)](https://user-images.githubusercontent.com/56379930/122900775-2c231e00-d377-11eb-9401-99288ac62123.png)

![p12(10)](https://user-images.githubusercontent.com/56379930/122900819-32b19580-d377-11eb-8576-4d48efaf969f.png)

![p12(11)](https://user-images.githubusercontent.com/56379930/122900851-380ee000-d377-11eb-8f57-b5c82c18efb7.png)

![p12(12)](https://user-images.githubusercontent.com/56379930/122900884-3e04c100-d377-11eb-99ea-c1a6ec49f082.png)
![p12(13)](https://user-images.githubusercontent.com/56379930/122900899-40ffb180-d377-11eb-8a42-5a6573b63bd7.png)

![p12(15)](https://user-images.githubusercontent.com/56379930/122900932-4957ec80-d377-11eb-92c4-d1efaa16d4ab.png)
![p12(16](https://user-images.githubusercontent.com/56379930/122900976-5248be00-d377-11eb-84be-04369d101172.png)
![p12(17)](https://user-images.githubusercontent.com/56379930/122901007-583e9f00-d377-11eb-83d3-74e982a5d148.png)
![p12(18)](https://user-images.githubusercontent.com/56379930/122901094-6bea0580-d377-11eb-83d4-67bfe4b82543.png)
![p12(19)](https://user-images.githubusercontent.com/56379930/122901103-6e4c5f80-d377-11eb-8962-682333feb5b0.png)
