<?php
/**
 * Suppression d'un film
 */

// Connexion à la base
$page="film_supprimer.php";
$dbh=db_connect();

// Récupère l'ID passé dans l'URL 
$id_film = isset($_GET['id_film']) ? $_GET['id_film'] : '';

// Lecture du formulaire
$submit = isset($_POST['submit']);

// Suppression dans la base
if ($submit) {
    // Formulaire validé : on supprime l'enregistrement
    $id_film = $_POST['id_film'];
    // Suppression de la relation (sinon erreur à cause de la contrainte FK)
    $sql = "delete from film_acteur where id_film=:id_film";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_film" => $id_film));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    // Suppression du film
    $sql = "delete from film where id_film=:id_film";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_film" => $id_film));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $titre = "";
    $realisateur = "";
    $annee = "";
    $message = "$nb film(s) modifié(s)";
} else {
    // Formulaire non encore validé : on affiche l'enregistrement
    $sql = "select * from film where id_film=:id_film";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_film" => $id_film));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $titre = $row['titre'];
    $realisateur = $row['realisateur'];
    $annee = $row['annee'];
    $message = "Veuillez valider la suppression de l'ID $id_film SVP";
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
  <h2>Suppression d'un film</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="titre" id="titre" type="text" value="<?php echo $titre; ?>" disabled /></p>
    <p>Réalisateur<br /><input name="realisateur" id="realisateur" type="text" value="<?php echo $realisateur; ?>" disabled /></p>
    <p>Année<br /><input name="annee" id="annee" type="text" value="<?php echo $annee; ?>" disabled /></p>
    <div><input name="id_film" id="id_film" type="hidden" value="<?php echo $id_film; ?>" /></div>
    <p><input type="submit" name="submit" value="Supprimer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>