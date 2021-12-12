<?php
/**
 * Modification d'un pays
 */

include 'init.php';
$page="modifier_pays.php";
// Connexion à la base
$dbh=db_connect();

// Récupère l'ID passé dans l'URL 
$id_pays = isset($_GET['id_pays']) ? $_GET['id_pays'] : '';

// Lecture du formulaire

$submit = isset($_POST['submit']);

// Modification dans la base
if ($submit) {
    // Formulaire validé : on modifie l'enregistrement
    $id_pays = isset($_POST['id_pays']) ? $_POST['id_pays'] : '';
    $sql = "delete from pays where id_pays=:id_pays";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_pays" => $id_pays));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message = "$nb pays(s) modifié(s)";
} else {
    // Formulaire non encore validé : on affiche l'enregistrement
    $sql = "select * from pays where id_pays=:id_pays";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":id_pays" => $id_pays));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $nom_fr = $row['nom_fr'];
    $date_adhesion = $row['date_adhesion'];
    $code = $row['code'];
    $nom_local = $row['nom_local'];
    $capitale = $row['capitale'];
    $langues = $row['langues'];
    $monnaie = $row['monnaie'];
    $message = "Veuillez réaliser la supprimer de l'ID $id_pays SVP";
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
  <h2>Modification d'un pays</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Nom francais<br /><input name="nom_fr" id="nom_fr" type="text" value="<?php echo $nom_fr; ?>"disabled /></p>
        <p>Date d'adhesion<br /><input name="date_adhesion" id="date_adhesion" type="date" value="<?php echo $date_adhesion; ?>"disabled /></p>
        <p>code<br /><input name="code" id="code" type="text" value="<?php echo $code; ?>" disabled/></p>
        <p>nom_local<br /><input name="nom_local" id="nom_local" type="text" value="<?php echo $nom_local; ?>"disabled /></p>
        <p>capitale<br /><input name="capitale" id="capitale" type="text" value="<?php echo $capitale; ?>"disabled /></p>
        <p>langues<br /><input name="langues" id="langues" type="text" value="<?php echo $langues; ?>"disabled /></p>
        <p>monnaie<br /><input name="monnaie" id="monnaie" type="text" value="<?php echo $monnaie; ?>"disabled /></p>
        <div><input name="id_pays" id="id_pays" type="hidden" value="<?php echo $id_pays; ?>" /></div>
        <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
    </form>
</body>

</html>