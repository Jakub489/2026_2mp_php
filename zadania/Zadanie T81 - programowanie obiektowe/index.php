<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Zadanie T81 - programowanie obiektowe</title>
</head>
<body>

<?php

class czolg {
    public $nazwa, $kolor, $ilosc_amunicji;

    function info($nazwa, $kolor, $ilosc_amunicji) {
        $this->nazwa = $nazwa;
        $this->kolor = $kolor;
        $this->ilosc_amunicji = $ilosc_amunicji;

        echo "Nazwa: $this->nazwa <br>";
        echo "Kolor: $this->kolor <br>";
        echo "Ilość amunicji: $this->ilosc_amunicji <br>";
    }

    function pomaluj($kolor) {
        $this->kolor = $kolor;
        echo "Czołg został pomalowany na kolor: $this->kolor <br>";
    }

    function zaladuj($ilosc_amunicji) {
        $this->ilosc_amunicji = $ilosc_amunicji;
        $this->ilosc_amunicji += 1;

        echo "Załadowano amunicję. Ilość amunicji: $this->ilosc_amunicji <br>";
    }

    function strzelaj() {
        if ($this->ilosc_amunicji <= 0) {
            echo "Brak amunicji! <br>";
        } else {
            $this->ilosc_amunicji--;
            echo "OGNIAA!! <br>";
            echo "Pozostała amunicja: $this->ilosc_amunicji <br>";
        }
    }
}

$czolg1 = new czolg();

$czolg1->nazwa = "czolg";
$czolg1->kolor = "czerwony";
$czolg1->ilosc_amunicji = 2;


echo "<h3>Informacje o czołgu:</h3>";
$czolg1->info($czolg1->nazwa, $czolg1->kolor, $czolg1->ilosc_amunicji);

echo "<h3>Malowanie czołgu:</h3>";
$czolg1->pomaluj("zielony");

echo "<h3>Ładowanie amunicji:</h3>";
$czolg1->zaladuj($czolg1->ilosc_amunicji);

echo "<h3>Strzelanie:</h3>";
$czolg1->strzelaj();

?>

</body>
</html>
