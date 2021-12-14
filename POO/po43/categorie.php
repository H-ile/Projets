<?php

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/list.php?c=list");
$tableau = json_decode($json,true);
//secho "<pre>";
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
  <h2>Liste des ingrédients (API)</h2>
  <?php include "menu.php"; ?>
  <table>
    <caption>Liste des ingrédients</caption>
    <tr>
      <th>Nom</th>
      <th>Détails</th>
    </tr>
    <?php
  foreach ($rows as $key=>$value) {
      echo '<tr>';
      echo '<td>'.$value['strCategory'].'</td>';
      echo '<td><a href="categorie_details.php?nom='.$value['strCategory'].'">'.$value['strCategory'].'</a></td>';
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?php echo count($rows); ?> ingrédient(s)</p>
</body>
</html>