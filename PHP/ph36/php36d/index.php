<?php
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Récupère la liste des pays
$sql = 'select * from mcu';
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>php36 - Marvel</title>
</head>
<body>
    <h1>Php 36c - MCU avec une BD</h1>
    <img src="img/mcu_logo.png"/>
    <p> Source: <a href="https://fr.wikipedia.org/wiki/Univers_cin%C3%A9matographique_Marvel"> Marvel Cinematic Univers </a>sur Wikipédia</p>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="film_rechercher.php">Chercher</a> un fim</li>
    <br>
  <?php
  if (count($rows) > 0) {
  ?>
<table>
  <tr>        
  <th>Titre</th>
  <th>Phase</th>
  <th>Poster</th>
  <th>Date de sortie USA</th>
  <th>Réalisateur(s)</th>
  <th>Auteur(s)</th>
  <th>Producteur(s)</th>
  <th>Statut</th>
              
  </tr>
  <?php
  foreach ($rows as $row) {
      echo '<tr>';
    
      echo '<td>' . $row['title'] . '</td>';
      echo '<td>' . $row['phase'] . '</td>';


      if ($row['id'] >= 10) {
          $file = 'img/' . $row['id'] . '.jpg';
          if (file_exists($file)) {
              echo '<td><img src="img/' . $row['id'] . '.jpg" alt=""></td>';
          } else {
              echo '<td>???</td>';
          }
      } else {
          $file = 'img/0' . $row['id'] . '.jpg';
          if (file_exists($file)) {
              echo '<td><img src="img/0' . $row['id'] . '.jpg" alt=""></td>';
          }
      }

      echo '<td>' . $row['us_release_date'] . '</td>';
      echo '<td>' . $row['directors'] . '</td>';
      echo '<td>' . $row['screenwriters'] . '</td>';
      echo '<td>' . $row['producers'] . '</td>';
      echo '<td>' . $row['status'] . '</td>';
      echo '<td><a href="film_modifier.php?id=' . $row['id'] . '">Modifier</a>&nbsp;';
      echo '<a href="film_supprimer.php?id=' . $row['id'] . '">Supprimer</a></td>';
      echo "</tr>";
  } ?>
  </table>
  <?php
  } else {
    echo "<p>Rien à afficher</p>";
  }
  ?>
  <p>Il y a <?php echo count($rows); ?> Film(s)</p>
  <p><a href="film_ajouter.php">Ajouter</a> un film</p>
</body>

</html>
</body>
</html>