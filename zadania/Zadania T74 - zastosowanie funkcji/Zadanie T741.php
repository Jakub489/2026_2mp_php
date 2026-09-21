<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T741</title>
</head>
<body>

<h1>Autor: Jakub Płudowski</h1>
<h2>Zadanie T741</h2>
<hr>


<?php

function fun1($a){
    if($a>0)
        return $a;
    else
        return $a * -1;
}

function fun2($b){
    return ($b>0) ?$b : $b * -1;
}

echo fun1(2);
echo"<br>";
echo fun2(-2);

?>

</body>
</html>


