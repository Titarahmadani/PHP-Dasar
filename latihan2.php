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
    // variabel dalam php
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi varibael txt adalah: $txt</p>" ;
    echo "<p>isi varibael x adalah: $x</p>" ;
    echo "<p>isi varibael y adalah: $y</p>" ;
    echo "Belajar PHP di" . $txt2 . "<br>" ;
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "{ini nama anda disini}");
    echo "<br>".nama_konstanta;
    ?>
</body>
</html>