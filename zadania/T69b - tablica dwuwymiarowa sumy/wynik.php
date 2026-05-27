<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T69b - tablica dwuwymiarowa sumy</title>
</head>
<body>

<h1>T69b - tablica dwuwymiarowa sumy</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<?php

$tablica = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $tablica[$i][$j] = rand(10, 99);
    }
}

foreach ($tablica as $wiersz) {
    foreach ($wiersz as $element) {
        echo $element . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br><br>";

echo "<h3>Suma:</h3>";
foreach ($tablica as $index => $wiersz) {
    $suma = array_sum($wiersz);
    echo "Suma wiersza $index = $suma <br>";
}


?>

</body>
</html>
