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
   $x = 5;
   $y = 10;

   //Arithmetic operators
   echo "Penambahan ".$x + $y."<br>";
   echo "Pengurangan ".$x - $y."<br>";
   echo "Perkalian ".$x * $y."<br>";
   echo "Pembagian ".$x / $y."<br>";
   echo "Modulus ".$x % $y."<br>";
   echo "Exponensial ".$x ** $y."<br>";
   echo("<br>");

   //Assignment operators
   $x += 2; // $x = $x + 2
   $y *= 2; // $y = $x * 2
   echo "Penambahan x ".$x."<br>";
   echo "Perkalian x ".$x."<br>";
   echo("<br");

   // Increment/Decrement operators
   echo "Isi ++x = ".++$x."<br>";
   echo "Isi x++ = ".$x++."<br>";
   echo "Isi x = ".$x."<br>";
   echo("<br>");
   echo "Isi --y = ".--$y."<br>";
   echo "Isi y-- = ".$y--."<br>";
   echo "Isi y = ".$y."<br>";
   echo("<br>");

   //Conditional assignment operators
   $user = "Andi darmawan";
   echo $user."<br>";
   // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
   $status = (empty($user)) ? "Kosong" : "Ada isi";
   echo $status."<br>";

   echo $color = $color ?? "red";
    ?>
</body>
</html>