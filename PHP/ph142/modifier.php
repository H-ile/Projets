<?php
include 'sql.php';
// Connexion à la base
$dbh=db_connect();
// Récupère l'ID passé dans l'URL par la page index.php
$id = isset($_GET['id']) ? $_GET['id'] : '';
// Lecture du formulaire
$titre = isset($_POST['titre']) ? $_POST['titre'] : '';
$realisateur = isset($_POST['realisateur']) ? $_POST['realisateur'] : '';
$annee = isset($_POST['annee']) ? $_POST['annee'] : '';
$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
    // Formulaire validé : on modifie l'enregistrement
  $id = $_POST['id_film'];
  $sql = "update film set titre=:titre, realisateur=:realisateur,annee=:annee where id_film=:id_film";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(":titre" => $titre, ":realisateur" => $realisateur, ":annee" => $annee, ":id_film" => $id));
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die ("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $message = "$nb personne(s) modifié(s)";
} else {
    // Formulaire non encore validé : on affiche l'enregistrement
  $sql = "select * from film where id_film=:id_film";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(":id_film" => $id));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $titre = ['titre'];
  $realisateur = ['realisateur'];
  $annee = ['annee'];
  $id = ['id_film'];

  $message = "Veuillez réaliser la modification de l'ID $id SVP";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ph142 - Terminator</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>ph142 - Terminator</h1>
<h2>Modification d'un film</h2>
<p><?php echo $message; ?></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <p>titre<br /><input name="titre" id="titre" type="text" value="<?php echo $titre; ?>" /></p>
    <p>Prétitre<br /><input name="realisateur" id="realisateur" type="text" value="<?php echo $realisateur; ?>" /></p>
    <p>Année<br /><input name="annee" id="annee" type="text" value="<?php echo $annee; ?>" /></p>
    <div><input name="id_film" id="id_film" type="hidden" value="<?php echo $id; ?>" /></div>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
</form>
<p>Liste des <a href="film.php">films</a></p>     
</body>
</html>