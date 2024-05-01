<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Soal 2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
</head>
<body>
    <h1>Banyak uang pecahan Ani</h1>

    <?php

$uang = 1387500; // jumlah uang yang diambil Ani

$pecahan = array(
    100000, // Rp. 100.000,-
    50000,  // Rp. 50.000,-
    20000,  // Rp. 20.000,-
    10000,  // Rp. 10.000,-
    5000,   // Rp. 5.000,-
    2000,   // Rp. 2.000,-
    500     // Rp. 500,-
);

$result = array();

foreach ($pecahan as $p) {
    $jumlah = floor($uang / $p);
    $result[$p] = $jumlah."<br>";
    $uang -= $jumlah * $p;
}

print_r($result);

?>

</body>
</html>