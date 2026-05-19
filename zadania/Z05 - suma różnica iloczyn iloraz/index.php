<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z05 - suma różnica iloczyn iloraz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Z05 - suma różnica iloczyn iloraz</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który oblicza sumę, różnicę, iloczyn i iloraz (całkowity - jak w C++), resztę z dzielenia i potęgę liczb całkowitych A i B.</p>

<form action="index.php" method="post">
    <label for="a">a</label><input type="text" name="a" id="a"><br>
    <label for="b">b</label><input type="text" name="b" id="b"><br>
    <input type="submit" value="oblicz">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(is_numeric($_POST['a']) && is_numeric($_POST['b'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        echo"a = $a<br>b = $b<br>";

        $suma = $a + $b;
        echo"suma = $suma<br>";
        $roznica = $a - $b;
        echo"roznica = $roznica<br>";
        $iloczyn = $a * $b;
        echo"iloczyn = $iloczyn<br>";

        if($b!=0) {
            $iloraz = floor($a / $b);
            echo"iloraz = $iloraz<br>";
            $reszta = $a%$b;
            echo"reszta = $reszta<br>";
        }
        else{
            echo"nie mozna dzielic przez zero";
        }
        $potega = $a ** $b;
        echo"potega = $potega<br>";
        }
   else
       echo"podane wartości muszą być liczbami!";
}





?>

</body>
</html>
