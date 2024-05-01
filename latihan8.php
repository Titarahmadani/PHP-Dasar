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
    // Data kelas dengan array 2 dimensi
    $array = [
        "1C" => array("udin", "ismail", "adi"),
        "1D" => array("Lukman", "fajri", "mahmud"),
    ];

    // Menampilkan data array
    print_r($array);

    // Menampilkan kelas 1D
    echo "<br><br>Kelas 1D: ";
    print_r($array['1D']) . "<br>";

    // Menampilkan kelas 1D
    echo "<br><br>Kelas 1D: ";
    print_r($array['1D'][0]);

    echo "<br><br>Kelas 1D: ";
    print_r($array['1D'][1]);

    echo "<br><br>Kelas 1C: ";
    print_r($array['1C'][2]);

    ?>
</body>
</html>