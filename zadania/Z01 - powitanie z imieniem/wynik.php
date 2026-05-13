<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wynik</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    <?php
    $imie = $_POST["imie"];
    $wiek = $_POST["wiek"];
    echo "<h1>witaj $imie</h1>";
    echo "<h2>miło cię widzieć na naszej stronie</h2>";
    echo "<h3>masz $wiek lat</h2>";
    ?>
</body>
</html>

