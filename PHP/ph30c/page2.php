<?php
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();
// Liste des personnes
$sql = 'select a.nom, a.prenom, b.commune from personnes a, communes b where a.cp=b.cp order by b.commune, a.nom, a.prenom';
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
    <title>ph30c - Meteonet</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>ph30c - Meteonet</h1>
<h2>Liste des personnes par commune</h2>
<?php
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>Commune</th><th>Nom</th><th>Prénom</th></tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['commune'].'</td>';
      echo '<td>'.$row['nom'].'</td>';
      echo '<td>'.$row['prenom'].'</td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>
<p><?php echo count($rows); ?> personne(s)</p>
<p>Liste des <a href="index.php">personnes</a></p>       
</body>
</html>