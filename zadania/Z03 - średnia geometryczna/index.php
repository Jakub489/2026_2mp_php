<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z03 - średnia geometryczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Z03 - średnia geometryczna</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<section>
  <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>


<form action="index.php" method="post">
  <label for="a">dodaj a</label><input type="text" id="a" name="a"><br>
  <label for="b">dodaj b</label><input type="text" id="b" name="b"><br>
  <label for="c">dodaj c</label><input type="text" id="c" name="c"><br>
  <label for="d">dodaj d</label><input type="text" id="d" name="d"><br>
  <input type="submit" value="oblicz średnią geometryczną">
</form>
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

$srednia_geometryczna = pow(($a*$b*$c*$d),0.25);
$srednia_geometryczna_zaokraglona = round($srednia_geometryczna,3);
echo"a = $a<br>b = $b<br>c = $c<br>d = $d<br><hr>";
echo"srednia geometryczna = $srednia_geometryczna<br>";
echo"srednia geometryczna zaokraglona = $srednia_geometryczna_zaokraglona<br>";


    }
?>

</section>
</body>
</html>


