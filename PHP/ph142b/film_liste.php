<?php
/**
 * Liste des films
 */
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();
// Récupère la liste des films
$sql = 'select * from film';
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
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
<h2>Liste des films</h2>
<?php
include "menu.php";
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Titre</th><th>Réalisateur</th><th>Année</th><th>&nbsp;</th></tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['titre'].'</td>';
      echo '<td>'.$row['realisateur'].'</td>';
      echo '<td>'.$row['annee'].'</td>';
      echo '<td><a href="film_modifier.php?id_film='.$row['id_film'].'">Modifier</a>&nbsp;';
      echo '<a href="film_supprimer.php?id_film='.$row['id_film'].'">Supprimer</a></td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
<p><?php echo count($rows); ?> film(s)</p>
<p><a href="film_ajouter.php" >Ajouter</a> un film</p>
</body>
</html>