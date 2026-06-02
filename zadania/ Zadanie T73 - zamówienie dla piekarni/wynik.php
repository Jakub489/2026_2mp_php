<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T73 - zamówienie dla piekarni</title>
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
        <label>Ile pączków</label><input type="number" name="paczek" id="paczek">
    </section>

    <section>
        <img src="img/drozd.jpg" alt="drozdzowka">
        <label>Ile chlebów bananowych</label><input type="number" name="chleb" id="chleb">
    </section>

    <section>
        <img src="img/paczek.jpg" alt="paczek">
        <label>Ile drożdżówek</label><input type="number" name="drozd" id="drozd">
    </section>
    <hr>
    <label>podaj wiek</label><input type="number" id="wiek" name="wiek">
    <label>wybierz sposób dostawy</label><input>
    <hr>
    <input type="submit" value="oblicz">
    </form>
</main>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $chleb = $_POST['chleb'];
    $drozd = $_POST['drozd'];
    $paczek = $_POST['paczek'];
    $wiek = $_POST['wiek'];
    if(is_numeric($chleb)&&is_numeric($drozd)&&is_numeric($paczek)&&is_numeric($wiek)){
        $cena_chleba=0;
        $cena_drozd=0;
        $cena_paczek=0;
    }
    else
        echo"podano złe wartość";

}

?>

</body>
</html>
