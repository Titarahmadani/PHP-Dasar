<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Variabael</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
    </head>
<body>
    <h1>Hari</h1>

    <?php

// Array nama hari dalam bahasa Indonesia
$namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

// Mendapatkan hari ini (angka 0-6, Minggu = 0)
$hariIni = date('w');

// Menampilkan nama hari ini
echo "Hari ini adalah: " . $namaHari[$hariIni] . "\n"."<br>";

// Menampilkan nama hari selanjutnya (mod 7 untuk mengulang array)
for ($i = 1; $i <= 6; $i++) {
    $hariBesok = ($hariIni + $i) % 7;
    echo "Besok " . ($i + 1) . " adalah: " . $namaHari[$hariBesok] . "\n"."<br>";
}

?>



</body>
</html>