<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T69 - czytanie danych z formularza i wykonywanie operacji matematycznych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>T69 - czytanie danych z formularza i wykonywanie operacji matematycznych</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<form action="wynik.php" method="post">
    <label>imie</label><input type="text" name="imie" id="imie"><br>
    <label>Liczba 1:</label><br>
    <input type="text" name="liczby[]"><br><br>

    <label>Liczba 2:</label><br>
    <input type="text" name="liczby[]"><br><br>

    <label>Liczba 3:</label><br>
    <input type="text" name="liczby[]"><br><br>

    <label>Liczba 4:</label><br>
    <input type="text" name="liczby[]"><br><br>
    <input type="submit" value="oblicz"><br>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    $dane = $_POST['liczby'];

    echo "Witaj $imie na mojej stronie!!!<br><br>";

    $liczby = [];
    foreach ($dane as $wartosc) {
        if (is_numeric($wartosc)) {
            $liczby[] = (float)$wartosc;
        }
    }
    echo "liczby:<br>";
    var_dump($liczby);

    $suma = array_sum($liczby);
    $ilosc = count($liczby);

    if ($ilosc > 0) {
        $srednia = $suma / $ilosc;
    } else {
        $srednia = 0;
    }

    echo "<br><br>";
    echo "Suma: " . $suma . "<br>";
    echo "Średnia: " . $srednia;
}
?>
</body>
</html>
