<?php
include 'config.php';
// Connexion à la base
$dbh=db_connect();
// Liste des personnes
$sql = 'select libelle, nom from station, ligne where station.id_ligne = ligne.id_ligne';
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
    <title>ph34 - Metro toulousain</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>ph30 - Metro toulousain</h1>
<a href="index.php">retour</a><br><br>
<?php
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>id</th><th>Station</th><tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['libelle'].'</td>';
      echo '<td>'.$row['nom'].'</td>';
      echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Rien à afficher</p>";
}
?>

    
</body>
</html>