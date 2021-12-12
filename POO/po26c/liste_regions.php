<?php
/**
 * Liste des régions
 */
require_once "init.php";
// Crée le tableau d'objets métier "Region"
$dao = new RegionDAO(); 
$regions = $dao->findAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po26c</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po26c</h1>
  <h2>Liste des régions</h2>
  <?php include "menu.php"; ?>
  <p>Créer un <a href="createpdfreg.php"> PDF</a></p>
  <table>
  <tr><th>ID</th><th>Libellé</th><th>Outre-mer ?</th><th>Nb départements</th></tr>
  <?php  
  foreach ($regions as $region) {
    echo "<tr>";
    echo "<td>".$region->get_id()."</td>";
    echo "<td>".$region->get_libelle()."</td>";
    echo "<td>".$region->get_lib_est_outremer()."</td>";
    echo "<td>".count($region->get_departements())."</td>";
    echo "</tr>";
  }
  ?>
  <table>
  <p>Il y a <?php echo count($regions); ?> region(s)</p>
</body>
</html>