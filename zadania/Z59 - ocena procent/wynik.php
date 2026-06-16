<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z59 - ocena procent</title>
</head>
<body>

<h1>Z59 - ocena procent</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:</p>
<p>5 - 90% do 100%<br>
    4,5 - 80% do 89%<br>
    4 - 70% do 79%<br>
    3,5 - 60% do 69%<br>
    3 - 50% do 59%<br>
    2 - poniżej 50%</p><br>

<form action="wynik.php" method="post">
    <label>Podaj procent:</label><br>
    <input type="text" name="procent" id="procent"><br>
    <input type="submit" value="oblicz">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $procent = $_POST['procent'];

    if ($procent >= 90 && $procent <= 100)
            echo "5";
    else if ($procent >= 80 && $procent <= 89)
        echo "4,5";
    else if ($procent >= 70 && $procent <= 79)
        echo "4";
    else if ($procent >= 60 && $procent <= 69)
        echo "3,5";
    else if ($procent >= 50 && $procent <= 59)
        echo "3";
    else if ($procent < 50)
        echo "2";



}
?>

</body>
</html>
