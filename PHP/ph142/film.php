<?php
include 'sql.php';
// Connexion à la base
$dbh=db_connect();
// Liste des personnes
$sql = 'select titre, realisateur, annee from film';
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>film</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>ph142 - Terminator</h1>
<h2>Liste des film</h2>
<ul>
    <li>Page d'<a href="acceuil.php">acceuil</a></li>
    <li>Liste des <a href="film.php">films</a></li>
    <li>liste des <a href="#">acteurs</a></li>
    <li>liste des <a href="#">relations film-acteurs</a></li>
    </ul>
<?php
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Titre</th><th>Réalisateur</th><th>Année</th><th></th><th></th></tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['titre'].'</td>';
      echo '<td>'.$row['realisateur'].'</td>';
      echo '<td>'.$row['annee'].'</td>';
      echo '<td><a href="modifier.php?id='.'">Modifier</a></td>';
      echo '<td><a href="supprimer.php?id='.'">Supprimer</a></td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
<p><?php echo count($rows); ?> films(s)</p>
<a href="ajouter.php">ajouter un film</a>   
<img src="" alt="">
</body>
</html>