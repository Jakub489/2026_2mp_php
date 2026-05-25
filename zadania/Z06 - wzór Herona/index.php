<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z06 - wzór Herona</title>
</head>
<body>

<h1>Z06 - wzór Herona</h1>
<h2>Autor: Jakub Płudowski</h2>
<hr>

Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona. W pierwszej wersji aplikacji nie nusisz uwzględniać sytuacji, w której z podanych liczb nie można zbudować trójkąta (np. 10, 2, 2). Problem rozwiążemy po opanowaniu instrukcji warunkowej.

<form action="index.php" method="post">
    <label for="a">dodaj a</label><input type="text" id="a" name="a"><br>
    <label for="b">dodaj b</label><input type="text" id="b" name="b"><br>
    <label for="c">dodaj c</label><input type="text" id="c" name="c"><br>
    <input type="submit" value="oblicz średnią geometryczną">
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(is_numeric($_POST['a'])&&is_numeric($_POST['b'])&&is_numeric($_POST['c'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            echo"a = $a<br>b = $b<br>c = $c<br>";

            if($a<$b+$c&&$b<$c+$a&&$c<$a+$b) {
                $pol = 0.5*($a+$b+$c);
                $heron = sqrt($pol*($pol-$a)*($pol-$b)*($pol-$c));
                echo"pole wynosi $heron<br>";
            }





        }
        else
            echo"zle podane wartosci";

    }


?>


</body>
</html>
