<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T745</title>
</head>
<body>

<h1>Zadanie T745</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<?php

function euk($a, $b)
{
    while ($b != 0) {
        $reszta = $a % $b;
        $a = $b;
        $b = $reszta;
    }

    echo $a;
}

euk(24, 36);

?>

</body>
</html>
