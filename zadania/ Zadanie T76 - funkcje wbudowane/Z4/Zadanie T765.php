<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T765</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

function wyswietlDate() {
    $data = getdate();

    $miesiace = [
        1 => "stycznia",
        2 => "lutego",
        3 => "marca",
        4 => "kwietnia",
        5 => "maja",
        6 => "czerwca",
        7 => "lipca",
        8 => "sierpnia",
        9 => "września",
        10 => "października",
        11 => "listopada",
        12 => "grudnia"
    ];

    $dzien = $data["mday"];
    $miesiac = $miesiace[$data["mon"]];
    $rok = $data["year"];

    echo "Dzisiejsza data: $dzien $miesiac $rok";
}

wyswietlDate();

?>

</body>
</html>
