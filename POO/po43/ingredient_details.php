<?php
/**
 * po43 : Détails d'un ingrédient
 */

// Récupère le nom de l'ingrédient passé dans l'URL 
$nom = isset($_GET['nom']) ? $_GET['nom'] : NULL;

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?i=".$nom);
$tableau = json_decode($json,true);

//echo "<pre>";
//print_r($tableau);
//echo "</pre>";

$row = $tableau['ingredients'][0];

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
  <h2>Détails d'un ingrédient (API)</h2>
  <?php include "menu.php"; ?>
  <p><img src="https://www.thecocktaildb.com/images/ingredients/<?=$row['strIngredient']; ?>-Medium.png" alt="<?=$row['strIngredient']; ?>"></p>
  <ul>
    <li>ID : <?=$row['idIngredient']; ?></li>
    <li>Nom : <?=$row['strIngredient']; ?></li>
    <li>Description : <?=nl2br($row['strDescription']); ?></li>
    <li>Type : <?=$row['strType']; ?></li>
    <li>Alcoolisé ? : <?=$row['strAlcohol']; ?></li>
    <li>Taux : <?=$row['strABV']; ?></li>
  </ul>
<p>Revenir à la <a href="ingredient_liste.php">liste des ingrédients</a></p>

</body>
</html>