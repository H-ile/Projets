<?php
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Lecture du formulaire
$title = isset($_POST['title']) ? $_POST['title'] : '';
$phase = isset($_POST['phase']) ? $_POST['phase'] : '';
$us_release_date = isset($_POST['us_release_date']) ? $_POST['us_release_date'] : '';
$directors = isset($_POST['directors']) ? $_POST['directors'] : '';
$screenwriters = isset($_POST['screenwriters']) ? $_POST['screenwriters'] : '';
$producers = isset($_POST['producers']) ? $_POST['producers'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';

$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
  $sql = "INSERT INTO mcu(title, phase, us_release_date, directors, screenwriters, producers, status) VALUES (:title, :phase, :us_release_date, :directors, :screenwriters, :producers, :status)";
  $params = array(
    ":title" => $title,
    ":phase" => $phase,
    ":us_release_date" => $us_release_date,
    ":directors" => $directors,
    ":screenwriters" => $screenwriters,
    ":producers" => $producers,
    ":status" => $status
  );

  try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $message = "$nb film(s) créé(s)";
} else {
  $message = "Veuillez saisir un film SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php36c - Marvel</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>php36c - MCU</h1>
  <h2>Ajout d'un film</h2>
  <ul>
  <li><a href="index.php">Accueil</a></li>
  </ul>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="title" id="title" type="text" value="" /></p>
    <p>Phase<br /><input name="phase" id="phase" type="text" value="" /></p>
    <p>Date<br /><input name="us_release_date" id="us_release_date" type="date" value="" /></p>
    <p>Auteur(s)<br /><input name="directors" id="directors" type="text" value="" /></p>
    <p>Réalisateur(s)<br /><input name="screenwriters" id="screenwriters" type="text" value="" /></p>
    <p>Producteur(s)<br /><input name="producers" id="producers" type="text" value="" /></p>
    <p>Statut<br /><input name="status" id="status" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>