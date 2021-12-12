<?php

/**
 * po27b : liste des pays
 */
require_once "init.php";
// Crée le tableau d'objets métier "Pays"
$les_pays = array();
$dao = new PaysDAO();
$les_pays = $dao->findAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po27b</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po27b</h1>
  <h2>Liste des pays</h2>
  <?php include "menu.php"; ?>
  <p>[<a href="ajouter_pays.php">Ajouter</a>] un pays</p>
  <a href="createpdfdep.php">pdf</a>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Code</th>
      <th>Alpha2</th>
      <th>Alpha3</th>
      <th>Nom (EN)</th>
      <th>Actions</th>
    </tr>
    <?php
    foreach ($les_pays as $pays) {
      echo "<tr>";
      echo "<td>" . $pays->get_id_pays() . "</td>";
      echo "<td>" . $pays->get_nom_fr() . "</td>";
      echo "<td>" . $pays->get_code() . "</td>";
      echo "<td>" . $pays->get_alpha2() . "</td>";
      echo "<td>" . $pays->get_alpha3() . "</td>";
      echo "<td>" . $pays->get_nom_en() . "</td>";
      echo '<td>[<a href="modifier_pays.php?id=' . $pays->get_id_pays() . '">Modifier</a>]';
      echo '&nbsp[<a href="supprimer_pays.php?id=' . $pays->get_id_pays() . '">Supprimer</a>]</td>';
      echo "</tr>";
    }
    ?>
    <table>
      <p>Il y a <?php echo count($les_pays); ?> pays(s)</p>
</body>

</html>