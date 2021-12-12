<?php
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Récupère l'ID passé dans l'URL 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Lecture du formulaire
$title = isset($_POST['title']) ? $_POST['title'] : '';
$phase = isset($_POST['phase']) ? $_POST['phase'] : '';
$us_release_date = isset($_POST['us_release_date']) ? $_POST['us_release_date'] : '';
$directors = isset($_POST['directors']) ? $_POST['directors'] : '';
$screenwriters = isset($_POST['screenwriters']) ? $_POST['screenwriters'] : '';
$producers = isset($_POST['producers']) ? $_POST['producers'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';

$submit = isset($_POST['submit']);

// Modification dans la base
if ($submit) {
  // Formulaire validé : on modifie l'enregistrement
  $id = $_POST['id'];
  $sql = "UPDATE mcu SET title=:title,phase=:phase,us_release_date=:us_release_date,directors=:directors,screenwriters=:screenwriters,producers=:producers,status=:status WHERE id=:id";
  $params = array(
    ":id" => $id,
    ":title" => $title,
    ":phase" => $phase,
    ":us_release_date" => $us_release_date,
    ":directors" => $directors,
    ":screenwriters" => $screenwriters,
    ":producers" => $producers,
    ":status" => $status,
  );
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $message = "$nb film modifié(s)";
} else {
  // Formulaire non encore validé : on affiche l'enregistrement
  $sql = "select * from mcu where id=:id";
  $params = array(
    ":id" => $id
  );
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $row = $sth->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $title = $row["title"];
  $phase = $row["phase"];
  $us_release_date = $row["us_release_date"];
  $directors = $row["directors"];
  $screenwriters = $row["screenwriters"];
  $producers = $row["producers"];
  $status = $row["status"];
  $message = "Veuillez réaliser la modification de $title SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph36c - MCU</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph36 - Marvel</h1>
  <h2>Modification d'un film</h2>
  <li><a href="index.php">Accueil</a></li>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="title" id="title" type="text" value="<?= $title ?>" /></p>
    <p>Phase<br /><input name="phase" id="phase" type="date" value="<?= $phase ?>" /></p>
    <p>Date sortie USA<br /><input name="us_release_date" id="us_release_date" type="text" value="<?= $us_release_date ?>" /></p>
    <p>Réalisateur(s)<br /><input name="directors" id="directors" type="text" value="<?= $directors ?>" /></p>
    <p>Auteur(s)<br /><input name="screenwriters" id="screenwriters" type="text" value="<?= $screenwriters ?>" /></p>
    <p>Producteur(s)<br /><input name="producers" id="producers" type="text" value="<?= $producers ?>" /></p>
    <p>Statut<br /><input name="status" id="status" type="text" value="<?= $status ?>" /></p>
    <div><input name="id" id="id" type="hidden" value="<?= $id; ?>" /></div>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>