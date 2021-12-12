<?php
    include "inc/jours.inc.php";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>ph17 - page 3</title>
</head>
<body>
    <h1>ph17 - page 3</h1>
    <table>
    <tr>
        <th>Nr</th>
        <th>Français</th>
        <th>Occitan</th>
    </tr>
    <?php
        foreach ($jours as $cle=>$valeur) {
            echo "<tr><td>".$cle."</td><td>".$valeur."</td><td>".$occitan[$cle]."</td></tr>";
        }
        
    ?>
    </table>
    <p>Il y a <?php echo count($jours); ?> jour(s)</p>
    <p><a href="index.php">index</a></p>
    <p><a href="page2.php">page 2</a></p>
</body>
</html>