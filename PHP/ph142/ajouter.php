<?php
include 'sql.php';
// Connexion à la base
$dbh=db_connect();
// Lecture du formulaire
$titre = isset($_POST['titre']) ? $_POST['titre'] : '';
$realisateur = isset($_POST['realisateur']) ? $_POST['realisateur'] : '';
$annee = isset($_POST['annee']) ? $_POST['annee'] : '';
$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
    $sql="insert into film (titre, realisateur, annee) values (:titre,:realisateur,:annee)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":titre"=>$titre,":realisateur"=>$realisateur,":annee"=>$annee));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message="$nb film(s) créée(s)";
} else {
  $message="Veuillez saisir les information sur le film";
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
<h2>Ajout d'un film</h2>
<p><?php echo $message; ?></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <p>Titre<br /><input name="titre" id="titre" type="text" value="" /></p>
    <p>Réalisateur<br /><input name="realisateur" id="realisateur" type="text" value="" /></p>
    <p>Année<br /><input name="annee" id="annee" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
</form>
<p>Liste des <a href="film.php">film</a></p>     
</body>
</html> 