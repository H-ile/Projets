<?php

/**
 * sec18 - RésaVite
 * Liste des réservation du user
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

// Récupère l'id utilisateur dans la query string
$id=$_SESSION['user']['id_user'];

// Lecture en base des données de l'utilisateur

$sql = "select nom, debut, fin, nb_personnes from resa, salle where resa.id_user=id_user and resa.id_salle=salle.id_salle order by debut asc";
try {
  $sth = $dbh->query($sql);
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec18 - RésaVite</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec18 - RésaVite</h1>
    <h2>Réservations de l'utilisateur</h2>
    <?php
    include "menu.php"; 
    if (count($rows) > 0) {
      echo "<table>";
      echo  "<tr>";
      echo  "<th>Salle</th>";
      echo "<th>Début</th>";
      echo "<th>Fin</th>";
      echo "<th>Nb personne(s)</th>";
      echo "</th>";
      echo "<tr>";
      foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["debut"] . "</td>";
        echo "<td>" . $row["fin"] . "</td>";
        echo "<td>" . $row["nb_personnes"] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<p>Aucune réservation pour le moment</p>";
    }

    ?>
    </table>
  </div>
</body>

</html>