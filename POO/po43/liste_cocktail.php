<?php
$lettre = isset($_GET['lettre']) ? $_GET['lettre'] : NULL;
// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?f=".$lettre);
$cocktails = json_decode($json,true);

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
  <h2>Liste des cocktails</h2>
  <?php include "menu.php"; ?>
  <p>Sélectionnez la première lettre
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
      <select name="lettre" id="lettre" onchange="this.form.submit()">
        <?php
        $selected = NULL;
        foreach(array_merge(range(1, 9), range('A', 'Z')) as $chaine){
          if($lettre == $chaine){
            $selected = "selected";
          }else{
            $selected = null;
          }
          if($chaine != 8){
            echo '<option value="'.$chaine.'" '.$selected.'>'.$chaine.'</option>';
          }
          
        }
        ?>
      </select>
    </form>
  </p><br>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Détails</th>
    </tr>
    <?php
  foreach ($cocktails["drinks"] as $cocktail) {
      echo "<tr>";
      echo "<td>".$cocktail['idDrink']."</td>";
      echo "<td>".$cocktail['strDrink']."</td>";
      echo "<td><a href=\"cocktail_details.php?id=".$cocktail['idDrink']."\">".$cocktail['strDrink']."</a></td>";
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?= count($cocktails["drinks"]); ?> cocktail(s)</p>
</body>
</html>