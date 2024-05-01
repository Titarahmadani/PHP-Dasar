<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Soal 1</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
</head>
<body>
    <h1>Gaji Bersih</h1>

    <?php

// Gaji pokok
$gaji_pokok = 3250000;

// Tunjangan jabatan
$tunjangan_jabatan = 1200000;

// Pajak penghasilan (10% dari gaji kotor)
$pajak_penghasilan = 0.10;

// Hitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

// Hitung pajak penghasilan
$pajak = $gaji_kotor * $pajak_penghasilan;

// Hitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Tampilkan hasil
echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. ". number_format($gaji_bersih, 0, ',', '.'). ",-";

?>
</body>
</html>