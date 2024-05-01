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
   $namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");
   echo "saya suka " . $namaBuah[0] .", " . $namaBuah[1] . " dan " . $namaBuah[2] . "." . "<br>";

   echo "saya suka " . $namaBuah[1] . "<br>"; // tampikan Nanas
   echo "saya suka " . $namaBuah[2] . "<br>"; // tampikan Apel
   echo "saya suka " . $namaBuah[3] . "<br>"; // tampikan Melon
   echo "saya suka " . $namaBuah[4] . "<br>"; // tampikan Mangga dan Jeruk
   
   $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun");
   $umur['Ahmad'] = "50 Tahun";
   echo "Umur Andi adalah " . $umur['Andi'] . "." . "<br>";
   echo "Umur Ben adalah " . $umur['Ben'] . "." . "<br>";
   echo "Umur Joe adalah " . $umur['Joe'] . "." . "<br>";
   echo "Umur Ahmad adalah " . $umur['Ahmad'] . "." . "<br>";
    ?>
</body>
</html>