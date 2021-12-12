<?php
include 'functions/db_functions.php';
include 'functions/log.php';
// Connexion à la base
$page="acteur_liste.php";
logToDisk($page);
$dbh=db_connect();
// Récupère la liste des acteurs
$sql = 'select * from acteur';
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
  <title>ph142b - Terminator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph142b - Terminator</h1>
  <h2>Liste des acteurs</h2>
  <?php
include "menu.php";
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Prénom</th><th>Nom</th><th>&nbsp;</th></tr>';
    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>'.$row['prenom'].'</td>';
        echo '<td>'.$row['nom'].'</td>';
        echo '<td><a href="modifier.php?id_acteur='.$row['id_acteur'].'">Modifier</a>&nbsp;';
        echo '<a href="supprimer.php?id_acteur='.$row['id_acteur'].'">Supprimer</a></td>';
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
  <p><?php echo count($rows); ?> acteur(s)</p>
  <p><a href="acteur_ajouter.php">Ajouter</a> un acteur</p>
</body>

</html>