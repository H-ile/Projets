<?php
    include "inc/polygones.inc.php";
    $nb=8;
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>ph16</title>
</head>
<body>
    <h1>ph16 - Polygones</h1>
    <table>
    <tr><th>Polygones</th></tr>
    <?php
        foreach ($polygones as $cle=>$valeur) {
            echo "<tr><td>".$valeur."</td></tr>";
        }
    
    ?>
    </table>
    <p>Il y a <?php echo count($polygones); ?> polygone(s)</p>
    <p>un polygone a <?php echo $nb; ?> coté(s) est un <?php echo $polygones[$nb]; ?></p>

</body>
</html>