<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z42 - całkowite parzyste</title>
</head>
<body>

<h1>Z42 - całkowite parzyste</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<p>Napisz program który:
    sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.</p>

<form action="wynik.php" method="post">
    <label>Podaj liczbe:</label><br>
    <input type="text" name="l1" id="l1"><br>

    <label>Podaj liczbe:</label><br>
    <input type="text" name="l2" id="l2"><br>

    <input type="submit" value="oblicz">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $l1 = $_POST['l1'];
    $l2 = $_POST['l2'];

    if($l1 % 2 != 0|| $l2 % 2 != 0){
        if($l1 % 2 != 0){
            echo"liczba nie jest pazysta: $l1<br>";
        }
        elseif($l2 % 2 != 0){
            echo"liczba nie jest pazysta: $l2<br>";
        }
        if($l1 % 2 != 0|| $l2 % 2 != 0){
            if($l1 > $l2){
                echo"$l1 > $l2";
            }
            elseif($l1 < $l2){
                echo"$l2 < $l2";
            }
        }
    }
    elseif($l1 % 2 == 0 && $l2 % 2 == 0){
        if($l1 > $l2){
            echo"$l1 > $l2";
        }
        elseif($l1 < $l2){
            echo"$l2 < $l2";
        }
    }

}

?>

</body>
</html>
