<?php
include 'init.php';

// Instanciation du DAO
$fortuneDAO = new fortuneDAO();

// Lecture du formulaire
$rang = isset($_POST['rang']) ? $_POST['rang'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$siege = isset($_POST['siege']) ? $_POST['siege'] : '';
$pays = isset($_POST['pays']) ? $_POST['pays'] : '';
$chiffre = isset($_POST['ca']) ? $_POST['ca'] : '';
$benef = isset($_POST['benefice']) ? $_POST['benefice'] : '';
$employes = isset($_POST['nb_employes']) ? $_POST['nb_employes'] : '';
$branche = isset($_POST['branche']) ? $_POST['branche'] : '';
$ceo = isset($_POST['directeur']) ? $_POST['directeur'] : '';
$evolution = isset($_POST['evolution']) ? $_POST['evolution'] : '';

$submit = isset($_POST['submit']);

// Ajout dans la base
if ($submit) {
  $fortune = new Fortune(array(
    "rang" => $rang,
    "nom" => $nom,
    "siege" => $siege,
    "pays" => $pays,
    "ca" => $chiffre,
    "benefice" => $benef,
    "nb_employes" => $employes,
    "branche" => $branche,
    "directeur" => $ceo,
    "ecolution" => $evolution,
    )
  );
  $nb = $fortuneDAO->insert($fortune);
  $message = "$nb fortune(s) créé(s)";
} else {
  $message = "Veuillez saisir un fortune SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po38 - fortune</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po38 - fortune</h1>
  <h2>Ajout d'une fortune</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Rang<br /><input name="rang" id="rang" type="text" value="" /></p>
    <p>Nom<br /><input name="nom" id="nom" type="text" value="" /></p>
    <p>Siège Social<br /><input name="siege" id="siege" type="text" value="" /></p>
    <p>Pays<br /><input name="pays" id="pays" type="text" value="" /></p>
    <p>Chiffre d'affaire<br /><input name="ca" id="ca" type="text" value="" /></p>
    <p>Bénéfice<br /><input name="benefice" id="benefice" type="text" value="" /></p>
    <p>Nombre d'employés<br /><input name="nb_employes" id="nb_employes" type="text" value="" /></p>
    <p>Branche<br /><input name="nb_employes" id="nb_employes" type="text" value="" /></p>
    <p>Directeur<br /><input name="directeur" id="directeur" type="text" value="" /></p>
    <p>Evolution<br /><input name="evolution" id="evolution" type="text" value="" /></p>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>