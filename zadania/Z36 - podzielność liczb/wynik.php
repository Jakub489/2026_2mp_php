<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z36 - podzielność liczb</title>
</head>
<body>

<h1>Z36 - podzielność liczb</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który:
    dla liczb całkowitych (program powinien sprawdzić, czy liczby są całkowite) A i B sprawdza czy A jest podzielne przez B (wykorzystaj funkcję zwracającą resztę z dzielenia).</p>

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
    if(is_numeric($a)&&is_numeric($b)){
        if($a % $b == 0){
            echo"liczba $a jest podzielna przez $b";
        }
        else
            echo"liczba $a nie jest podzielna przez $b";
    }
    else
        echo"podano zle wartosci";

}
?>

</body>
</html>
