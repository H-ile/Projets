<?php
/**
 * po43 : liste des ingrédients
 */


// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list");
$tableau = json_decode($json,true);

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
  <h2>Liste des ingrédients (API)</h2>
  <?php include "menu.php"; ?>
  <table>
    <caption>Liste des ingrédients</caption>
    <tr>
      <th>Rang</th>
      <th>Nom</th>
      <th>Détails</th>
    </tr>
    <?php
  foreach ($rows as $key=>$value) {
      echo '<tr>';
      echo '<td>'.$key.'</td>';
      echo '<td>'.$value['strIngredient1'].'</td>';
      echo '<td><a href="ingredient_details.php?nom='.$value['strIngredient1'].'">'.$value['strIngredient1'].'</a></td>';
      echo "</tr>";
  }
  ?>oui
    <table>
      <p>Il y a <?php echo count($rows); ?> ingrédient(s)</p>
</body>
</html>