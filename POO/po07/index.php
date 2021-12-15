<?php
// Connexion à la base de données
include('inc/connexion_bd.inc.php');
// Nota :
// Les formats acceptés par la méthode format() sont décrits ici
// http://php.net/manual/fr/function.date.php
// Les fuseaux horaires sont ici
// http://php.net/manual/fr/timezones.php
// Les formats pour les intervalles de la classe DateInterval sont ici :
// http://php.net/manual/fr/dateinterval.format.php
// Les formats des périodes d'intervalle sont ici
// http://php.net/manual/fr/dateinterval.construct.php
$sql = 'select * from my_table where my_date = sysdate()';
try {
  $sth = $con->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po07 - Classe DateTime</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <h1>po07 - Classe DateTime</h1>
  <h2>Question 1</h2>
  <p>la date du jour</p>
  <?php
  $datetime = new DateTime(null, new DateTimeZone('Europe/Paris'));
  echo "<p>" . $datetime->format('d/m/Y') . "</p>";
  ?>
  <br>
  <h2>Question 2</h2>
  <p>la date du jour au format FR "JJ/MM/SSAA HH:MN:SS"</p>
  <?php
  $datetime = new DateTime(null, new DateTimeZone('Europe/Paris'));
  echo  "<p>" . $datetime->format('d/m/Y H:i:s') . "</p>";
  ?>
  <br>
  <h2>Question 3</h2>
  <p>la date du jour au format MySQL "SSAA-MM-JJ HH:MN:SS"</p>
  <?php
  try {
    $sql = "insert into my_table (my_date) values (:my_date)";
    $sth = $con->prepare($sql);
    $sth->execute(array(":my_date" => $datetime->format('Y-m-d H:i:s')));
  } catch (Exception $ex) {
    echo "<p>Message = " . $ex->getMessage() . "</p>";
  }
  foreach ($rows as $row) {
    echo '<p>' . $row['my_date'] . '</p>';
  }
  ?>
  <br>
  <h2>Question 4</h2>
  <p>Comment afficher la date du jour à Londres ?</p>
  <?php
  $datetime = new DateTime(null, new DateTimeZone('Europe/london'));
  echo  "<p>" . $datetime->format('d/m/Y H:i:s') . "</p>";
  ?>
<br>
  <h2>Question 5</h2>
  <p>Comment calculer la différence entre deux dates (en jours) ?</p>
  <?php 
  $datetime1 = new DateTime('2018-01-26');
  $datetime2 = new DateTime('2018-02-14');
  $intervalle = $datetime1->diff($datetime2);
  echo "<p>" . $intervalle->format('%R%a days') . "</p>";
  ?>
<br>
  <h2>Question 6</h2>
  <p>Comment ajouter/soustraire des jours à une date</p>
  <?php 
  $datetime = new DateTime(null, new DateTimeZone('Europe/Paris'));
  $datetime->sub(new DateInterval('P2D'));
  echo  "<p>" . $datetime->format('d/m/Y H:i:s') . "</p>";
  ?>
<br>
  <h2>Question 7</h2>
  <p>Comment comparer deux dates (plus récente, plus ancienne)</p>
  <?php 
  if ($datetime1 > $datetime2) {
    echo "<p>datetime1 est supérieure à datetime2</p>";
    } else {
    echo "<p>datetime1 est inférieure ou égale à datetime2</p>";
    }
  ?>
<br>
  <h2>Question 8</h2>
  <p>Comment insérer une date dans une base MySQL</p>

</body>

</html>