<?php
$nom = isset($_GET['nom']) ? $_GET['nom'] : NULL;
// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=".$nom);
$cocktails = json_decode($json,true);
//echo "<pre>";
//print_r($cocktails);
//echo "</pre>";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po43</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  
</head>

<body>
  <h1>po43</h1>
  <h2>details categorie</h2>
  <?php include "menu.php"; ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Détails</th>
      <th>image</th>
    </tr>
    <?php
  foreach ($cocktails["drinks"] as $cocktail) {
      echo "<tr>";
      echo "<td>".$cocktail['idDrink']."</td>";
      echo "<td>".$cocktail['strDrink']."</td>";
      echo "<td><a href=\"details_cocktail.php?id=".$cocktail['idDrink']."\">".$cocktail['strDrink']."</a></td>";
      echo '<td><img src="'.$cocktail['strDrinkThumb'].'" height="100" width="100" alt="oui" srcset=""></td>';
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?= count($cocktails["drinks"]); ?> cocktail(s)</p>
</body>
</html>