<?php
/**
 * Ajout d'un film
 */
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();

// Lecture du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
    $sql="insert into acteur (nom, prenom) values (:nom,:prenom)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":nom"=>$nom,":prenom"=>$prenom));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message="$nb film(s) créé(s)";
} else {
    $message="Veuillez saisir un film SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph142b - Terminator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph142b - Terminator</h1>
  <h2>Ajout d'un film</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Nom<br /><input name="nom" id="nom" type="text" value="" /></p>
    <p>Prénom<br /><input name="prenom" id="prenom" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>