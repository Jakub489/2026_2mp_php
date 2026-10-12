<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T764</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

function sprawdzDate($mm, $dd, $YY) {

    if (!checkdate($mm, $dd, $YY)) {
        echo "Błędna data";
        return;
    }

    $data = strtotime("$YY-$mm-$dd");
    $dzisiaj = strtotime(date("Y-m-d"));

    if ($data < $dzisiaj) {
        echo "historia";
    } else {
        echo "teraźniejszość lub przyszłość";
    }
}

sprawdzDate(5, 10, 2020);

?>

</body>
</html>
