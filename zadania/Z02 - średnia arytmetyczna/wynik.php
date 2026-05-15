<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

$srednia = ($a + $b + $c + $d)/4;
$srednia_zaokraglenie = round($srednia, 3);

echo"a = $a, b= $b, c= $c, d= $d<br>";
echo"srednia = $srednia<br>";
echo"srednia_zaokraglona = $srednia_zaokraglenie<br>";
?>

</body>
</html>

