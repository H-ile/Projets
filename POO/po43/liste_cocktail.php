<?php

/**
 * po43 : liste des Cocktails
 */

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?f=s");
$tableau = json_decode($json, true);

//echo "<pre>";
//print_r($tableau);
//echo "</pre>";

$rows = $tableau['drinks'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>po43 - The Cocktail DB</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
    <h1>po43 - The Cocktail DB</h1>
    <h2>Liste des Coktails (API)</h2>
    <?php include "menu.php"; ?>
    <p>Selectionner la première lettre</p>
    <select name="lettre" id="lettre" onchange="this.form.submit()">
    
    </select>
    <table>
        <caption>Liste des Cocktails</caption>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Détails</th>
        </tr>

        <?php
        foreach ($rows as $value) {
            echo '<tr>';
            echo '<td>' . $value['idDrink'] . '</td>';
            echo '<td>' . $value['strDrink'] . '</td>';
            echo '<td><a href="cocktail_details.php?nom=' . $value['strDrink'] . '">' . $value['strDrink'] . '</a></td>';
            echo "</tr>";
        }
        ?>
        <table>
            <p>Il y a <?php echo count($rows); ?> Cocktail(s)</p>
</body>

</html>