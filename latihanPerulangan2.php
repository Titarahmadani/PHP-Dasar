<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Latihan Perulangan 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
</head>
<body>
<h1>Latihan Perulangan 2</h1>
    <?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    foreach ($angka as $nomor) {
        if ($nomor % 2 == 0) {
            echo "Nomor: $nomor Genap<br>";
        } else {
            echo "Nomor: $nomor Ganjil<br>";
        }
    }
    ?>
</body>
</html>