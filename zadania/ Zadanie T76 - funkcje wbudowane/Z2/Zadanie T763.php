<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T763</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

function liczImionaZenskie($imiona) {
    $licznik = 0;

    foreach ($imiona as $imie) {
        $ostatniaLitera = substr($imie, -1);

        if (
            $ostatniaLitera == "a" &&
            $imie != "Kuba" &&
            $imie != "Barnaba"
        ) {
            $licznik++;
        }
    }

    echo "Liczba imion żeńskich: " . $licznik;
}

$imiona = ["Anna", "Kuba", "Tomasz", "Maria", "Barnaba", "Zofia", "Jan"];

liczImionaZenskie($imiona);

?>

</body>
</html>
