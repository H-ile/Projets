<?php
/**
 * Liste des départements par région
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$départements=array();
$dao = new RegionDAO(); 
$regions = $dao->findAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po26a</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po26a</h1>
  <h2>Liste des départements par région</h2>
  <?php include "menu.php"; ?>
  <?php
  foreach ($regions as $region) {
      echo '<h3> Région : ' . $region->get_libelle() . '</h3>';
      echo '<ul>';
      foreach ($region->get_departements() as $departement) {
          echo '<li>' . $departement->get_libelle() . '(' . $departement->get_id().')</li>';
      }
      echo '</ul>';
      echo"<p>Il y a ".count($region->get_departements())." département(s) dans la région ".$region->get_libelle()."</p>";
  }
  ?>
  <br>
  <p>Il y a <?php echo count($regions); ?> region(s)</p>
</body>

</html>