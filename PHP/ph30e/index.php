<?php
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();
// Liste des personnes
$sql = 'select * from personnes';
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
    <title>ph30e - Meteonet</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>ph30e - Meteonet</h1>
<h2>Liste des personnes avec liens</h2>
<?php
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Nom</th><th>Prénom</th><th>Age</th><th>code postal</th><th>&nbsp;</th><th>&nbsp;</th></tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['nom'].'</td>';
      echo '<td>'.$row['prenom'].'</td>';
      echo '<td>'.$row['age'].'</td>';
      echo '<td>'.$row['cp'].'</td>';
      echo '<td><a href="modifier.php?id='.$row['id'].'">Modifier</a></td>';
      echo '<td><a href="supprimer.php?id='.$row['id'].'">Supprimer</a></td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
<p><?php echo count($rows); ?> personne(s)</p>
<p><a href="ajouter.php" >Ajouter</a> une personne</p>
<p>Liste des personnes par <a href="page2.php">commune</a></p>    
</body>
</html>