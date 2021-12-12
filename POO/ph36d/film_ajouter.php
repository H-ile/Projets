<?php

/**
 * Ajout d'un pays
 */
include 'init.php';


// Connexion à la base

$dbh = db_connect();
// Lecture du formulaire
$Titre = isset($_POST['Titre']) ? $_POST['Titre'] : '';
$Phase = isset($_POST['Phase']) ? $_POST['Phase'] : '';
$Date_de_sortie = isset($_POST['Date_de_sortie']) ? $_POST['Date_de_sortie'] : '';
$realisateur =   isset($_POST['realisateur']) ? $_POST['realisateur'] : '';
$auteur  = isset($_POST['auteur']) ? $_POST['auteur'] : '';
$producteur  = isset($_POST['producteur']) ? $_POST['producteur'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
  $sql = "insert into mcu (title	,phase,	us_release_date ,	directors	,screenwriters	,producers,	status	) values (:Titre,:Phase,:Date_de_sortie,:realisateur,	:auteur	,:producteurs,	:status)";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(":Titre" => $Titre, ":Phase" => $Phase, ":Date_de_sortie" => $Date_de_sortie, ':realisateur' => $realisateur,  ':auteur' => $auteur, ':producteurs' => $producteur,  ':status' => $status));
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $message = "$nb pays(s) créé(s)";
} else {
  $message = "Veuillez saisir un pays SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph36d - MCU</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph36</h1>
  <h2>Ajout d'un film</h2>
  <p><a href="index.php">Accueil</a></p>
  <p><a href="film_rechercher.php">rechercher</a></p>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="Titre" id="Titre" type="text" value="" /></p>
    <p>Phase<br /><input name="Phase" id="Phase" type="texte" value="" /></p>
    <p>Date_de_sortie<br /><input name="Date_de_sortie" id="Date_de_sortie" type="date" value="" /></p>
    <p>realisateur<br /><input name="realisateur" id="realisateur" type="text" value="" /></p>
    <p>auteur<br /><input name="auteur" id="auteur" type="text" value="" /></p>
    <p>producteur<br /><input name="producteur" id="producteur" type="text" value="" /></p>
    <p>statut<br /><input name="status" id="status" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>