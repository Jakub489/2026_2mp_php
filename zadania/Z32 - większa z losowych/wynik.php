<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z32 - większa z losowych</title>
</head>
<body>

<h1>Z32 - większa z losowych</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</p>

<form action="wynik.php" method="post">
    <label>liczba 1</label><input type="number" id="liczba1" name="liczba1"><br>
    <label>liczba 2</label><input type="number" id="liczba2" name="liczba2"><br>
    <input type="submit" value="oblicz"></input>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];

    $los = rand($liczba1, $liczba2);
    $los2 = rand($liczba1, $liczba2);
    echo"wylosowane liczby: $los, $los2<br>";
    if($los>$los2){
        echo"$los>$los2";
    }
    elseif ($los<$los2){
        echo"$los<$los2";
    }
    else
        echo"$los=$los2";
}
?>

</body>
</html>
