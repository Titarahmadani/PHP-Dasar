<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
</head>
<body>
    <h1>Halaman PHP saya</h1>

    <?php
    function writeMsg($nama) {
        echo "Selamat datang ". $nama." <br> ";

    }
    writeMsg("Ahmad");

    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a;
    }

    $hasil=tambah(5, 5);
    echo ($hasil);
    ?>
</body>
</html>