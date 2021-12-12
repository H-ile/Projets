<?php

/**
 * ph143c - Europa
 * Recherche dans les pays
 */
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Lecture du formulaire
$critere = isset($_POST['critere']) ? $_POST['critere'] : null;

$submit = isset($_POST['submit']);

// Construction de l'ordre SQL
$sql = "SELECT * FROM pays";
$where = null;
if ($submit) {
  // Formulaire validé : on recherche dans la table pays
  $sql .= " WHERE nom_fr like '%$critere%' or nom_local like '%$critere%' or capitale like '%$critere%' or langues like '%$critere%' or monnaie like '%$critere%'";
}
$sql .= " ORDER by id_pays";
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph143c - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143c - Europa</h1>
  <h2>Moteur de recherche sur les pays</h2>
  <?php include "menu.php"; ?>
  <!-- Formulaire de recherche -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Critère<br /><input name="critere" id="critere" type="text" value="<?= $critere ?>" /></p>
    <p><input type="submit" name="submit" value="Chercher" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
  <!-- Résultats -->
  <?php
  if (count($rows) > 0) {
  ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Date d'adhésion</th>
        <th>Code</th>
        <th>Nom local</th>
        <th>Capitale</th>
        <th>Langue(s) officielle(s)</th>
        <th>Monnaie</th>
      </tr>
      <?php
      foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['id_pays'] . '</td>';
        echo '<td>' . $row['nom_fr'] . '</td>';
        echo '<td>' . $row['date_adhesion'] . '</td>';
        echo '<td>' . $row['code'] . '</td>';
        echo '<td>' . $row['nom_local'] . '</td>';
        echo '<td>' . $row['capitale'] . '</td>';
        echo '<td>' . $row['langues'] . '</td>';
        echo '<td>' . $row['monnaie'] . '</td>';
        echo "</tr>";
      } ?>
    </table>
  <?php
  } else {
    echo "<p>Rien à afficher</p>";
  }
  ?>
  <p><?php echo count($rows); ?> pays(s)</p>
</body>

</html>