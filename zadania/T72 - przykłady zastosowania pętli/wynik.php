<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T72 - przykłady zastosowania pętli</title>
</head>
<body>

<h1>T72 - przykłady zastosowania pętli</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

<?php

//Kod 1--------------------------------------------------

 for($i=1; $i<=5; $i++)
     echo "Pętla wykonana $i raz/y <br><br>";

 //Kod 2-------------------------------------------

 $i=0;
 while ($i++ <5)
 {
     echo "Pętla wykonana $i raz/y <br><br>";
 }

 //Kod 3 ---------------------------------------------


    $i=1;
    do
    {
        echo "Pętla wykonana $i raz/y <br><br>";
    }
    while ($i++<5);

//Kod 4--------------------------------------------


    $tab = array(
        1=>'biały',
        2=>'czarny',
        3=>'niebieski',
        4=>'zielony',
    );
    foreach($tab as $x)
    {
        echo "$x <br>";
    }
    echo "------------------<br>";
    foreach($tab as $k1 =>$x)
    {
        echo "tab[$k1]=$x <br><br>";
    }

    //Kod 5---------------------------------------------------


    $i=0;
    while(true)
    {
        echo ("Wypisz $i <br>");
        if ($i>=20) break;
        $i++;
    }

//Kod 6------------------------------------------------


    for($i=0; $i<=30 ; $i++)
    {
        if (($i%3)!=0)
            continue;
        echo "$i;";
    }

?>

</body>
</html>
