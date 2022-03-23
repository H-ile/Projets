<?php


// Initialisations
include 'init.php';

// Instanciation du DAO
$fortuneDAO = new FortuneDAO();

// Liste des films MCU
$rows = $fortuneDAO->findAll();

$classe = "impair";
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
  <h1>po38 - fortune</h1>
  <h2>Liste des fortune</h2>
  <?php include "menu.php"; ?>
  <div><img src="img/stonks_man.png" alt="stonks"></div>
  <table>
    <tr>
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
      <th>&nbsp;</th>
    </tr>
    <?php
        foreach ($rows as $row) {
            echo "<tr>";
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
            echo '<td><a href="modifier_fortune.php?id='.$row->get_id().'">Modifier</a>&nbsp;';
            echo '<a href="supprimer_fortune.php?id='.$row->get_id().'">Supprimer</a></td>';
            echo "</tr>";
        }
    ?>
  </table>
  <?php
    // Nombre de films
    echo "<p>Il y a ".count($rows). " fortune(s)</p>";
    ?>
    <p><a href="ajouter_fortune.php">Ajouter</a> un film</p>
</body>

</html>