<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T744</title>
</head>
<body>

<h1>Zadanie T744</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<?php

function liczby($a, $b)
{
    if ($a < $b) {
        echo "<p style='color: green;'>$a</p> ";
        echo "<p style='color: red;'>$b</p>";
    } elseif ($a > $b) {
        echo "<p style='color: red;'>$a</p> ";
        echo "<p style='color: green;'>$b</p>";
    } else {
        echo "<p style='color: blue;'>$a</p> ";
        echo "<p style='color: blue;'>$b</p>";
    }
}

liczby(5, 10);

?>

</body>
</html>
