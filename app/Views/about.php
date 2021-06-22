<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="ratnaaa.jpg" title="ratna arista" alt="ratna arista" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Ratna Arista</h1>
            <p>Nama saya Ratna Arista, Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya tinggal di Cibarusah.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
