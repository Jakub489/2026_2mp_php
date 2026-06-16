<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z40 - zupa</title>
</head>
<body>

<h1>Z40 - zupa</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który pyta o nazwę zupy – jeśli zupa to „grzybowa” lub „grochowa” (niezależnie od wielkości użytych znaków) odpowiada, że lubi te zupę. W innym przypadku odpowiada, że nie lubi tej zupy wykorzystując w odpowiedzi jej nazwę np. Zupa pomidorowa – nie lubię tej zupy!!!</p>
<br>
<form method="post" action="wynik.php">
    <label>Podaj nazwe zupy:</label><br>
    <input type="text" name="zupa" id="zupa"><br>
    <input type="submit" value="oblicz">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $zupa = $_POST['zupa'];
    $zupa = strtolower($zupa);

    if ($zupa=="pomidorowa"||$zupa=="rosol"){
            echo"nie lubie $zupa";
        }
    elseif($zupa == "grochowa"|| $zupa="grzybowa"){
        echo"lubie $zupa";
    }


}

?>

</body>
</html>
