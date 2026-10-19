<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T80 - komentarze do pliku</title>
</head>
<body>

<?php
$plik = "opinie.txt";

if (isset($_POST["opinia"])) {
    file_put_contents($plik, trim($_POST["opinia"]) . "\n", FILE_APPEND);
}

$opinie = file_exists($plik) ? file($plik) : [];
?>

<h1>Dodaj opinię</h1>

<form method="post">
    <textarea name="opinia" placeholder="Wpisz swoją opinię..." required></textarea>
    <button type="submit">Wyślij</button>
</form>

<h2>Opinie użytkowników:</h2>

<?php foreach ($opinie as $opinia): ?>
    <p><?= htmlspecialchars($opinia) ?></p>
<?php endforeach; ?>

</body>
</html>
