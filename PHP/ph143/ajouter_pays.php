<?php

/**
 * Ajout d'un pays
 */

// Connexion à la base
include 'init.php';
$dbh = db_connect();

// Lecture du formulaire
$nom_fr = isset($_POST['nom_fr']) ? $_POST['nom_fr'] : '';
$date_adhesion = isset($_POST['date_adhesion']) ? $_POST['date_adhesion'] : '';
$code = isset($_POST['code']) ? $_POST['code'] : '';
$nom_local = isset($_POST['nom_local']) ? $_POST['nom_local'] : '';
$capitale = isset($_POST['capitale']) ? $_POST['capitale'] : '';
$langues = isset($_POST['langues']) ? $_POST['langues'] : '';
$monnaie = isset($_POST['monnaie']) ? $_POST['monnaie'] : '';

$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
    $sql = "insert into pays (nom_fr, date_adhesion, code, nom_local, capitale, langues, monnaie) values (:nom_fr,:date_adhesion,:code,:nom_local,:capitale,:langues,:monnaie)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":nom_fr" => $nom_fr, ":date_adhesion" => $date_adhesion, ":code" => $code, ":nom_local" => $nom_local, ":capitale" => $capitale, ":langues" => $langues, ":monnaie" => $monnaie,));
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
    <title>ph143 - Europa</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>ph143 - Europa</h1>
    <h2>Ajout d'un pays</h2>
    <?php include "menu.php"; ?>
    <p><?php echo $message; ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Nom francais<br /><input name="nom_fr" id="nom_fr" type="text" value="" /></p>
        <p>Date d'adhesion<br /><input name="date_adhesion" id="date_adhesion" type="date" value="" /></p>
        <p>code<br /><input name="code" id="code" type="text" value="" /></p>
        <p>nom_local<br /><input name="nom_local" id="nom_local" type="text" value="" /></p>
        <p>capitale<br /><input name="capitale" id="capitale" type="text" value="" /></p>
        <p>langues<br /><input name="langues" id="langues" type="text" value="" /></p>
        <p>monnaie<br /><input name="monnaie" id="monnaie" type="text" value="" /></p>
        <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
    </form>
</body>

</html>