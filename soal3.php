<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Soal 3</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar php">
    <meta name="keywords" content="{233307017}">
    <meta name="author" content="{Indikasari Tita Rahmadani}">
</head>
<body>
    <h1>Poin Siswa</h1>

    <?php
$siswa = array(
    array("1", "75", "Adi"),
    array("2", "80", "Joni"),
    array("3", "65", "Jihan"),
    array("4", "70", "Aya"),
    array("5", "85", "Ita"),
    array("6", "90", "Budi"),
    array("7", "95", "Tini"),
    array("8", "65", "Sari")
);

for ($i = 0; $i < count($siswa); $i++) {
    if ($siswa[$i][0] == "5") {
        echo "Poin siswa dengan nomor urut 5 adalah: " . $siswa[$i][1]."<br>";
    }
}

$siswa = array(
    array("1", "75", "Adi"),
    array("2", "80", "Joni"),
    array("3", "65", "Jihan"),
    array("4", "70", "Aya"),
    array("5", "85", "Ita"),
    array("6", "90", "Budi"),
    array("7", "95", "Tini"),
    array("8", "65", "Sari")
);

for ($i = 0; $i < count($siswa); $i++) {
    if ($siswa[$i][1] == "90") {
        echo "Nama siswa dengan poin 90 adalah: " . $siswa[$i][2] . "<br>";
    }
}

$siswa = array(
    array("1", "75", "Adi"),
    array("2", "80", "Joni"),
    array("3", "65", "Jihan"),
    array("4", "70", "Aya"),
    array("5", "85", "Ita"),
    array("6", "90", "Budi"),
    array("7", "95", "Tini"),
    array("8", "65", "Sari")
);

$ada = false;

for ($i = 0; $i < count($siswa); $i++) {
    if ($siswa[$i][1] == "100") {
        echo "Nama siswa dengan poin 100 adalah: " . $siswa[$i][2] . "<br>";
        $ada = true;
    }
}

if (!$ada) {
    echo "Tidak ada siswa dengan poin 100.";
}
?>

</body>
</html>