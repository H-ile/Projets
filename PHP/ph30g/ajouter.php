<?php
include 'functions/db_functions.php';
// Connexion à la base
$dbh=db_connect();
// Lecture du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$cp = isset($_POST['cp']) ? $_POST['cp'] : '';
$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
    $sql="insert into personnes (nom, prenom, age, cp) values (:nom,:prenom,:age,:cp)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":nom"=>$nom,":prenom"=>$prenom,":age"=>$age,":cp"=>$cp));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die( "<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message="$nb personne(s) créée(s)";
} else {
  $message="Veuillez saisir une personne SVP";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ph30g - Meteonet</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>ph30g - Meteonet</h1>
<h2>Ajout d'une personne</h2>
<p><?php echo $message; ?></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <p>Nom<br /><input name="nom" id="nom" type="text" value="" /></p>
    <p>Prénom<br /><input name="prenom" id="prenom" type="text" value="" /></p>
    <p>Age<br /><input name="age" id="age" type="text" value="" /></p>
    <p>CP<br /><input name="cp" id="cp" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
</form>
<p>Liste des <a href="index.php">personnes</a></p>     
</body>
</html>