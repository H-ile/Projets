<?php


// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=".$_GET['id']);
$cocktail = json_decode($json,true);



$row=$cocktail["drinks"];
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
  <h2>Détails de <?= $row[0]["strDrink"] ?></h2>
  <?php include "menu.php"; ?>
  <img src="<?= $row[0]["strDrinkThumb"]."/preview" ?>" alt="">
  <ul>
      <li>ID : <?= $row[0]["idDrink"] ?></li>
      <li>Nom : <?= $row[0]["strDrink"] ?></li>
      <li>Ingredients : 
        <?php 
        $ing = '';
          for($i=1; $i<16; $i++){
            if($row[0]['strIngredient'.$i] != NULL){
              $ing .= $row[0]['strIngredient'.$i].',';
            }
          }
        echo rtrim($ing, ',');
        ?>
      </li>
      <li>Instructions : <?= $row[0]["strInstructions"] ?></li>
  </ul>
  <p>Revenir à la <a href="liste_cocktail.php?lettre=a">Liste</a> des cocktails</p>
</body>
</html>