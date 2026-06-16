<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T73 - zamówienie dla piekarni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Piekarnia Chlebek</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<main>
    <h3>Co trzeci Pączek gratis!!<br><br></h3>
    <form method="post" action="wynik.php">
        <section>
            <img src="img/chleb.jpg" alt="chleb">
            <label>Ile chlebów bananowych</label><input type="number" name="paczek" id="paczek">
        </section>

        <section>
            <img src="img/drozd.jpg" alt="drozdzowka">
            <label>Ile drożdżówek</label><input type="number" name="chleb" id="chleb">
        </section>

        <section>
            <img src="img/paczek.jpg" alt="paczek">
            <label>Ile pączków</label><input type="number" name="drozd" id="drozd">
        </section>
        <hr>
        <label>podaj wiek</label><input type="number" id="wiek" name="wiek">



        <label>Wybierz sposób dostawy:</label><br>

        <input type="radio" id="kurier" name="dostawa" value="1">
        <label for="kurier">Kurier</label><br>


        <input type="radio" id="odbior" name="dostawa" value="2">
        <label for="odbior">Odbiór osobisty</label>
        <hr>



        <input type="submit" value="oblicz">
    </form>
</main>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $chleb = $_POST['chleb'];
    $drozd = $_POST['drozd'];
    $paczek = $_POST['paczek'];
    $wiek = $_POST['wiek'];
    $dostawa = $_POST['dostawa'];

    if (is_numeric($chleb) && is_numeric($drozd) && is_numeric($paczek) && is_numeric($wiek)) {

        $cena_chleba = 5;
        $cena_drozd = 2.50;
        $cena_paczek = 2;

        if ($wiek < 18) {
            echo "Nie jesteś pełnoletni!";
        } else {


            $gratisowe_paczki = floor($paczek / 3);
            $platne_paczki = $paczek - $gratisowe_paczki;


            $koszt_chleb = $chleb * $cena_chleba;
            $koszt_drozd = $drozd * $cena_drozd;
            $koszt_paczki = $platne_paczki * $cena_paczek;


            if ($dostawa == 1) {
                $koszt_dostawy = 15;
                $nazwa_dostawy = "Kurier";
            } else {
                $koszt_dostawy = 0;
                $nazwa_dostawy = "Odbiór osobisty";
            }

            $suma = $koszt_chleb + $koszt_drozd + $koszt_paczki + $koszt_dostawy;

            echo "<h2>Podsumowanie zamówienia</h2>";
            echo "Chleby bananowe: $chleb szt.<br>";
            echo "Drożdżówki: $drozd szt.<br>";
            echo "Pączki: $paczek szt.<br>";
            echo "Gratisowych pączków: $gratisowe_paczki szt.<br>";
            echo "Sposób dostawy: $nazwa_dostawy<br>";
            echo "Koszt dostawy: $koszt_dostawy zł<br><br>";
            echo "<strong>Do zapłaty: $suma zł</strong>";
        }

    } else {
        echo "Podano błędne wartości!";
    }
}

?>

</body>
</html>
