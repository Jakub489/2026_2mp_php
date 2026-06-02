<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z38 - większa równe</title>
</head>
<body>

<h1>Z38 - większa równe</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który:
    dla liczby całkowitych (program sprawdza, czy podane liczny są całkowite) A i B wyświetla, która z nich jest większa lub czy są równe.</p>

<form method="post" action="wynik.php">
    <label>Podaj a</label><input type="text" name="a" id="a"><br>
    <label>Podaj b</label><input type="text" name="b" id="b"><br>
    <input type="submit" value="oblicz">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];
    $b = $_POST['b'];
    echo"a = $a<br>b = $b<br>";

    if (is_numeric($a) && is_numeric($b)) {

        if ((int)$a == $a && (int)$b == $b) {

            if ($a < $b) {
                echo "$a<$b";
            } elseif ($a > $b) {
                echo "$a>$b";
            } else {
                echo "$a==$b";
            }

        } else {
            echo "Liczby muszą być całkowite.";
        }
    }
    else
        echo"podano zle wartosci";

}

?>

</body>
</html>
