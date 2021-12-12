<?php

// Connexion à la base
$dbh=db_connect();
$sql = 'select * from pays';
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
  <title>ph143 - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143 - Europa</h1>
  <h2>Liste des pays de l'Union Européenne</h2>
 
<?php
if (count($rows)>0) {
echo '<table>';
echo '<tr><th>id</th><th>Nom</th><th>Date adhésion</th><th>Nom local</th><th>capitale</th><th>langue(s) officielle(s)</th><th>Monnaie</th></tr>s';
foreach ($rows as $row)
{
  echo '<tr>';
  echo '<td>'.$row['id_pays'].'</td>';
  echo '<td>'.$row['nom_fr'].'</td>';
  echo '<td>'.$row['date_adhesion'].'</td>';
  echo '<td>'.$row['code'].'</td>';
  echo '<td>'.$row['nom_local'].'</td>';
  echo '<td>'.$row['capitale'].'</td>';
  echo '<td>'.$row['langues'].'</td>';
  echo '<td>'.$row['monnaie'].'</td>';

  echo '<td><a href="pays_modifier.php?id_pays='.$row['id_pays'].'">Modifier</a>&nbsp;';
  echo '<a href="supprimer_pays.php?id_pays='.$row['id_pays'].'">Supprimer</a></td>';
  echo "</tr>";
}
echo "</table>";
}


?>
<p><?php echo count($rows); ?> pays</p>
<p><a href="ajouter_pays.php" >Ajouter</a> un pays</p>
</body>

</html>