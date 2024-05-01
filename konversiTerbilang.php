<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Konversi Terbilang</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
    </head>
<body>

<h2>Konversi Angka ke Huruf</h2>

<form action="" method="post">
    Masukkan Angka: <input type="number" name="angka" min="1" max="9">
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST["angka"];
    switch ($angka) {
        case 1:
            $terbilang = "satu";
            break;
        case 2:
            $terbilang = "dua";
            break;
        case 3:
            $terbilang = "tiga";
            break;
        case 4:
            $terbilang = "empat";
            break;
        case 5:
            $terbilang = "lima";
            break;
        case 6:
            $terbilang = "enam";
            break;
        case 7:
            $terbilang = "tujuh";
            break;
        case 8:
            $terbilang = "delapan";
            break;
        case 9:
            $terbilang = "sembilan";
            break;
        default:
            $terbilang = "Angka tidak valid";
    }
    echo "<p>Terbilang: $terbilang</p>";
}
?>

</body>
</html>