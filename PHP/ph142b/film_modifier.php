<?php
/**
 * Modification d'un film
 */
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();

// Récupère l'ID passé dans l'URL 
$id_acteur = isset($_GET['id_acteur']) ? $_GET['id_acteur'] : '';

// Lecture du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$realisateur = isset($_POST['realisateur']) ? $_POST['realisateur'] : '';
$annee = isset($_POST['annee']) ? $_POST['annee'] : '';

$submit = isset($_POST['submit']);

// Modification dans la base
if ($submit) {
    // Formulaire validé : on modifie l'enregistrement
    $id_acteur = $_POST['id_acteur'];
    $sql = "update film set nom=:nom,realisateur=:realisateur,annee=:annee where id_acteur=:id_acteur";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":nom" => $nom, ":realisateur" => $realisateur, ":annee" => $annee, ":id_acteur" => $id_acteur));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message = "$nb film(s) modifié(s)";
} else {
    // Formulaire non encore validé : on affiche l'enregistrement
    $sql = "select * from film where id_acteur=:id_acteur";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_acteur" => $id_acteur));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $nom = $row['nom'];
    $realisateur = $row['realisateur'];
    $annee = $row['annee'];
    $message = "Veuillez réaliser la modification de l'ID $id_acteur SVP";
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
  <h2>Modification d'un film</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>nom<br /><input name="nom" id="nom" type="text" value="<?php echo $nom; ?>" /></p>
    <p>Réalisateur<br /><input name="realisateur" id="realisateur" type="text" value="<?php echo $realisateur; ?>" /></p>
    <p>Année<br /><input name="annee" id="annee" type="text" value="<?php echo $annee; ?>" /></p>
    <div><input name="id_acteur" id="id_acteur" type="hidden" value="<?php echo $id_acteur; ?>" /></div>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>