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
    echo "<ul>";
    for($i=0;$i<=10;$i++)
    {
        $resultat=5*$i;
        echo "<li>".$i.'x5 '.'='.$resultat ."</li>";
    }
    echo"</ul>";
    ?>

</body>
</html>
