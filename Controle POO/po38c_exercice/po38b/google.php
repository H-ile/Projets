<?php

/**
 * po42 - MCU avec DAO
 * Recherche dans les films
 */
include 'init.php';

// Instanciation du DAO
$fortuneDAO = new FortuneDAO();

// Lecture du formulaire
$critere = isset($_POST['critere']) ? $_POST['critere'] : null;

$submit = isset($_POST['submit']);


if ($submit) {
  $rows = $fortuneDAO->findByCritere($critere);
} else {
  $rows = $fortuneDAO->findAll();
}

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po38 - fortune</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po42 - fortune</h1>
  <h2>moteur de recherche</h2>
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
        <th>rang</th>
        <th>nom</th>
        <th>Siège Social</th>
        <th>Pays</th>
        <th>Chiffre d'affaire</th>
        <th>Bénéfice</th>
        <th>Nombre d'employés</th>
        <th>Branche</th>
        <th>Directeur</th>
        <th>Evolution</th>
      </tr>
      <?php
      foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row->get_id() . '</td>';
        echo '<td>' . $row->get_rang() . '</td>';
        echo '<td>' . $row->get_nom() . '</td>';
        echo '<td>' . $row->get_siegesocial() . '</td>';
        echo '<td>' . $row->get_pays() . '</td>';
        echo '<td>' . $row->get_chiffre() . '</td>';
        echo '<td>' . $row->get_benef() . '</td>';
        echo '<td>' . $row->get_employes() . '</td>';
        echo '<td>' . $row->get_branche() . '</td>';
        echo '<td>' . $row->get_ceo() . '</td>';
        echo '<td>' . $row->get_evolution() . '</td>';

        echo "</tr>";
      } ?>
    </table>
  <?php
  } else {
    echo "<p>Rien à afficher</p>";
  }
  ?>
  <p><?php echo count($rows); ?> fortune(s)</p>
</body>

</html>