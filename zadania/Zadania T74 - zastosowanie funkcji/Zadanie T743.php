<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T743</title>
</head>
<body>

<h1>Autor: Jakub Płudowski</h1>
<h2>Zadanie T743</h2>
<hr>

<?php

function mies($mies){
    if($mies==1){
        return "styczen";
    }
    else if($mies==2){
        return "luty";
    }
    else if($mies==3){
        return "marzec";
    }
    else if($mies==4){
        return "kwiecien";
    }
    else if($mies==5){
        return "maj";
    }
    else if($mies==6){
        return "czerwiec";
    }
    else if($mies==7){
        return "lipiec";
    }
    else if($mies==8){
        return "sierpien";
    }
    else if($mies==9){
        return "wrzesien";
    }
    else if($mies==10){
        return "pazdziernik";
    }
    else if($mies==11){
        return "listopad";
    }
    else if($mies==12){
        return "grudzien";
    }
    else
        return "blad";

}

echo mies(3)

?>

</body>
</html>
