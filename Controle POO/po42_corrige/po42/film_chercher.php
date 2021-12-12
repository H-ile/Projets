<?php

/**
 * po42 - MCU avec DAO
 * Recherche dans les films
 */
include 'init.php';

// Instanciation du DAO
$filmDAO = new FilmDAO();

// Lecture du formulaire
$critere = isset($_POST['critere']) ? $_POST['critere'] : null;

$submit = isset($_POST['submit']);


if ($submit) {
  $rows = $filmDAO->findByCritere($critere);
} else {
  $rows = $filmDAO->findAll();
}

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po42 - MCU avec DAO</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po42 - MCU avec DAO</h1>
  <h2>Cherche des films</h2>
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
        <th>Titre</th>
        <th>Phase</th>
        <th>Date sortie USA</th>
        <th>Réalisateur(s)</th>
        <th>Auteur(s)</th>
        <th>Producteur(s)</th>
        <th>Statut</th>
      </tr>
      <?php
      foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row->get_id_film() . '</td>';
        echo '<td>' . $row->get_title() . '</td>';
        echo '<td>' . $row->get_phase() . '</td>';
        echo '<td>' . $row->get_us_release_date() . '</td>';
        echo '<td>' . $row->get_directors() . '</td>';
        echo '<td>' . $row->get_screenwriters() . '</td>';
        echo '<td>' . $row->get_producers() . '</td>';
        echo '<td>' . $row->get_status() . '</td>';

        echo "</tr>";
      } ?>
    </table>
  <?php
  } else {
    echo "<p>Rien à afficher</p>";
  }
  ?>
  <p><?php echo count($rows); ?> film(s)</p>
</body>

</html>