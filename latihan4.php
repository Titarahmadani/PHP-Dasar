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
    /* Operator logika yang bisa digunakan
    * == Sama Dengan $x == $y
    * === Identical $x === $y
    * != Tidak Sama Dengan $x != $y
    * <> Tidak Sama Dengan $x <> $y
    * !== Not Identical $x !== $y
    * > Lebih Besar dari $x > $y
    * < Kurang Dari $x < $y
    * >= Lebih besar atau Sama dengan $x >= $y
    * <= Kurang dari atau sama dengan $x <= $y
    * <=> Spaceship $x <=> $y
    */

    $t = date("H");
    echo "If ";
    if ($t < 16) {
        echo "Selamat Siang!";
    }

    $t = date("H");
    echo "<br> If dan Else <br>";
    if ($t < 16) {
        echo "Selamat Siang!";
    } else {
        echo "Selamat malam!";
    }

    $t = date("H");
    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat Pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }
    ?>
</body>
</html>