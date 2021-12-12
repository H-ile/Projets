<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ph11 comptage de personnes avec rang</h1>
    <?php
    $nombre = 10;
    echo "<h2>ph11</h2>";
    echo "<p>comptage de $nombre personne" . "<br>";
    for ($i = 1; $i <= $nombre; $i++) {
        if ($i % 5 == 0) {
            echo '<img src="homme.png"/><br>';
        } else {
            echo '<img src="homme.png"/>';
        }
    }
    ?>
</body>

</html>