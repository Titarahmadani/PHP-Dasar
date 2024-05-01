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
   // while loop
   $x = 10;
   while ($x == 5) { // note: == instead of = for comparison
       echo "Nomor :$x <br>";
       $x--; // decrement $x to avoid infinite loop
   }
   
   // do while
   $x = 1;
   do {
       echo "Nomor :$x <br>";
       $x++;
   } while ($x == 5);
   
   // foreach
   $colors = array("red", "green", "Blue", "yellow");
   foreach ($colors as $value) {
       echo "$value <br>";
   }
   
   // for
   for ($x = 0; $x <= 10; $x++) {
       echo "Nomor : $x <br>";
   }
   
   // for dengan break
   for ($x = 0; $x < 10; $x++) {
       if ($x == 4) {
           break;
       }
       echo "Nomor : $x <br>";
   }
    ?>
</body>
</html>