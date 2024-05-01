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
   $warna = "merah";
   switch ($warna) {
    case "merah":
        echo "warna adalah merah";
        break;
    case "kuning":
        echo "warna adalah kuning";
        break;
    case "hijau":
        echo "warna adalah hijau";
        break;
    default:
        echo "warna tidak dikenal";
   }
   echo "<br>";
    ?>
</body>
</html>