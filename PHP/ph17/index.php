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
<title>ph17</title>
</head>
<body>
<h1>ph17 - Jours de la semaine</h1>
    <table>
    <tr><th>Jours</th></tr>
    <?php
foreach ($jours as $cle=>$valeur) {
        echo "<tr><td>".$valeur."</td></tr>";
    }
        
    ?>
    </table>
    <p>Il y a <?php echo count($jours); ?> jour(s)</p>
        <p><a href="page2.php">page 2</a></p>
</body>
</html>