<?php

/**
 * sec18 - RésaVite
 * Réservation d'une salle
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

$messages = array();  // Message d'erreur

// Récupère l'id utilisateur dans la query string
$id_user=$_SESSION['user']['id_user'];

// Récupère le contenu du formulaire
$id_salle = isset($_POST['id_salle']) ? $_POST['id_salle'] : null;
$debut = isset($_POST['debut']) ? $_POST['debut'] : null;
$fin = isset($_POST['fin']) ? $_POST['fin'] : null;
$nb_personnes = isset($_POST['nb_personnes']) ? $_POST['nb_personnes'] : null;
$submit = isset($_POST['submit']);

// Réservation
if ($submit) {
  $dt1 = DateTime::createFromFormat("Y-m-d\TH:i",$debut);
  $dt2 = DateTime::createFromFormat("Y-m-d\TH:i",$debut);
  if ($dt1 === false) {
  $messages[] = "la date de début n'est pas valide : " . $debut;
  }
  if ($dt2 === false) {
    $messages[] = "la date de FIN n'est pas valide : " . $fin;
    }
  if ($dt2 < $dt1) {
    $messages[] = "la date de fin n'est pas supérieure à la date de début : " .
    $debut." ".$fin;
}
if (empty(trim('id_salle'))) {
  $messages[] = "la salle est obligatoire";
}
  $sql = "INSERT INTO resa(id_user,id_salle,debut,fin,nb_personnes) VALUES ('$id_user','$id_salle','$debut','$fin','$nb_personnes')";
  try {
    $nb = $dbh->exec($sql);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $messages[] = "$nb réservation(s)";
} else {
  $messages[] = "Veuillez saisir votre réservation";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec18 - RésaVite</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec18 - RésaVite</h1>
    <h2>Réserver une salle</h2>
    <?php
    include "menu.php";
    if (count($messages) > 0) {
      echo "<ul>";
      foreach ($messages as $message) {
        echo "<li>" . $message . "</li>";
      }
      echo "</ul>";
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'].'?id_user='.$id_user; ?>" method="post">
      <p>ID Salle<br /><input type="text" name="id_salle" id="id_salle" value="<?= $id_salle ?>"></p>
      <p>Date début<br /><input type="datetime-local" name="debut" id="debut" value="<?= $debut ?>"></p>
      <p>Date fin<br /><input type="datetime-local" name="fin" id="fin" value="<?= $fin ?>"></p>
      <p>Nb Personnes<br /><input type="text" name="nb_personnes" id="nb_personnes" value="<?= $nb_personnes ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>
</html>