<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T761</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

function sumaDwochNajmniejszych($tablica) {
    sort($tablica);


    echo implode(", ", $tablica) . "<br>";

    echo "Suma dwóch najmniejszych liczb: <br>";
    $suma = $tablica[0] + $tablica[1];

    return $suma;
}

$liczby = [7, 2, 9, 1, 5];

echo "Posortowana tablica: <br>";
echo sumaDwochNajmniejszych($liczby);

?>

</body>
</html>
