<?php
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Récupère l'ID passé dans l'URL 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Lecture du formulaire
$submit = isset($_POST['submit']);

// Suppression dans la base
if ($submit) {
  // Formulaire validé : on supprime l'enregistrement
  $id = $_POST['id'];
  // Suppression du pays
  $sql = "delete from mcu where id=:id";
  $params = array(
    ":id" => $id
  );
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute($params);
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $title = "";
  $phase = "";
  $us_release_date = "";
  $directors = "";
  $screenwriters = "";
  $producers = "";
  $status = "";
  $message = "$nb film supprimé(s)";
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
  $message = "Veuillez valider la suppression de $title SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph36 - Marvel</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph36c - MCU</h1>
  <h2>Suppression d'un film</h2>
  <li><a href="index.php">Accueil</a></li>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Nom fr<br /><input name="title" id="title" type="text" value="<?= $title ?>" disabled /></p>
    <p>Date adhésion<br /><input name="phase" id="phase" type="date" value="<?= $phase ?>" disabled /></p>
    <p>us_release_date ISO3166<br /><input name="us_release_date" id="us_release_date" type="text" value="<?= $us_release_date ?>" disabled /></p>
    <p>Nom local<br /><input name="directors" id="directors" type="text" value="<?= $directors ?>" disabled /></p>
    <p>screenwriters<br /><input name="screenwriters" id="screenwriters" type="text" value="<?= $screenwriters ?>" disabled /></p>
    <p>producers<br /><input name="producers" id="producers" type="text" value="<?= $producers ?>" disabled /></p>
    <p>status<br /><input name="status" id="status" type="text" value="<?= $status ?>" disabled /></p>
    <div><input name="id" id="id" type="hidden" value="<?php echo $id; ?>" /></div>
    <p><input type="submit" name="submit" value="Supprimer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>