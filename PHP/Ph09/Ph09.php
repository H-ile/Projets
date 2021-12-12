<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ph05 table de multiplication</h1>
    <h2>table de 5</h2>
    <?php
    $nombre = 5;
    $resultat;
    echo "<h2>avec bouble for</h2>";
    echo "<ul>";
    for($i=0;$i<=10;$i++)
    {
        $resultat=5*$i;
        echo "<li>".$i.'x5 '.'='.$resultat ."</li>";
    }
    echo"</ul>";
    echo "<h2>avec une boucle while</h2>";
    $i=1;
    echo "<ul>";
    while ($i <= 10) {
        $resultat=5*$i;
        echo "<li>".$i.'x5 '.'='.$resultat ."</li>";
        $i++;
        # code...
    }
    echo"</ul>";
    echo"<h2>avec une boucle do while</h2>";
    echo"<ul>";
    $i=1;
    do {
        $resultat=5*$i;
        echo "<li>".$i.'x5 '.'='.$resultat ."</li>";
        $i++;
        # code...
    } while ($i <= 10);
    echo "</ul>";
    ?>
</body>
</html>

