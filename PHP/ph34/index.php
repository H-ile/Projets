<?php
include 'config.php';
// Connexion à la base
$dbh=db_connect();
// Liste des personnes
$sql = 'select id_station, nom from station';
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
<a href="terminus.php">terminus par ligne</a> <br>
<a href="station_par_ligne.php">station par ligne</a> <br> <br>
<?php
if (count($rows)>0) {
    echo '<table>';
    echo '<tr><th>id</th><th>Station</th><tr>';
    foreach ($rows as $row)
    {
      echo '<tr>';
      echo '<td>'.$row['id_station'].'</td>';
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