<?php
/**
 * Liste des relations film/acteur
 */
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();
// Récupère la liste des relations film/acteur
$sql = 'select film.id_film as id_film, acteur.id_acteur as id_acteur, titre, prenom, nom from film, acteur, film_acteur where film.id_film = film_acteur.id_film AND acteur.id_acteur = film_acteur.id_acteur
order by film.id_film, acteur.id_acteur';
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
<h2>Liste des acteurs par film</h2>
<?php
include "menu.php";
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Titre</th><th>Nom</th><th>Prénom</th><th>&nbsp;</th></tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['titre'].'</td>';
      echo '<td>'.$row['nom'].'</td>';
      echo '<td>'.$row['prenom'].'</td>';
      echo '<td><a href="relation_modifier.php?id_film='.$row['id_film'].'&id_acteur='.$row['id_film'].'">Modifier</a>&nbsp;';
      echo '<a href="relation_supprimer.php?id_film='.$row['id_film'].'&id_acteur='.$row['id_film'].'">Supprimer</a></td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
<p><?php echo count($rows); ?> relation(s)</p>
<p><a href="relation_ajouter.php" >Ajouter</a> une relation</p>
</body>
</html>