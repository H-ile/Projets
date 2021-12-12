<?php
/**
 * Suppression d'un apys
 */


// Connexion à la base
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Récupère l'ID passé dans l'URL 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Lecture du formulaire

$submit = isset($_POST['submit']);
$id1	= isset($_POST['id']) ? $_POST['id'] : '';
// Modification dans la base
if ($submit) {
// Suppression dans la base
$sql = "delete from mcu where id=:id";
try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(':id'=>$id1));
    $nb = $sth->rowcount();
} catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
$message = "$nb pays(s) supprimé(s)";
$Titre = '';
$Phase = '';
$Date_de_sortie = '';
$realisateur  = '';
$auteur  = '';
$producteur = '';
$status = '';
} else {
// Formulaire non encore validé : on affiche l'enregistrement
$sql = "select * from mcu where id=:id";
try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(":id" => $id));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
$Titre = $row['title'];
$Phase = $row['phase'];
$Date_de_sortie = $row['us_release_date'];
$realisateur  = $row['directors'];
$auteur  = $row['screenwriters'];
$producteur = $row['producers'];
$status = $row['status'];

$message = "Veuillez réaliser la suppression de l'ID $id SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph36c- MCU</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph36c- MCU</h1>
  <h2>Suppression d'un FILM</h2>
  <p><a href="index.php">Accueil</a></p>
    <p><a href="film_rechercher.php">rechercher</a></p>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Titre<br /><input name="Titre" id="Titre" type="text" value="<?php echo $Titre?>" disabled/></p>
        <p>Phase<br /><input name="Phase" id="Phase" type="texte" value="<?php echo $Phase?>" disabled/></p>
        <p>Date_de_sortie<br /><input name="Date_de_sortie" id="Date_de_sortie" type="date" value="<?php echo $Date_de_sortie?>" disabled/></p>
        <p>realisateur<br /><input name="realisateur" id="realisateur" type="text" value="<?php echo $realisateur?>"disabled /></p>
        <p>auteur<br /><input name="auteur" id="auteur" type="text" value="<?php echo $auteur?>" disabled/></p>
        <p>producteur<br /><input name="producteur" id="producteur" type="text" value="<?php echo $producteur?>" disabled/></p>
        <p>statut<br /><input name="status" id="status" type="text" value="<?php echo $status?>" disabled/></p>
        <input name="id" id="id" type="hidden" value="<?php echo $id ?>" />
        <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser"disabled /></p>
    </form>
</body>

</html>