<?php
/**
 * po42 - MCU avec DAO
 * Modification d'un film
 */
// Initialisations
include 'init.php';

// Instanciation du DAO
$fortuneDAO = new FortuneDAO();

// Récupère l'ID passé dans l'URL 
$id = isset($_GET['id_fortune']) ? $_GET['id_fortune'] : '';

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

// Modification dans la base
if ($submit) {
  // Formulaire validé : on modifie l'enregistrement
  $id = $_POST['id_fortune'];

  $fortune=new Fortune(array(
    "id_fortune" => $id,
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
  $nb = $fortuneDAO->update($fortune);
  $message = "$nb fortune(s) modifié(s)";
} else {
  // Formulaire non encore validé : on affiche l'enregistrement
  $row = $fortuneDAO->find($id);
  $rang = $row->get_rang();
  $nom = $row->get_nom();
  $pays = $row->get_pays();
  $chiffre = $row->get_chiffre();
  $siege = $row->get_siegesocial();
  $benef = $row->get_benef();
  $employes = $row->get_employes();
  $branche = $row->get_branche();
  $ceo = $row->get_ceo();
  $evolution = $row->get_evolution();
  $message = "Veuillez réaliser la modification de $nom SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po42 - MCU avec DAO</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po38 - Fortune</h1>
  <h2>Modification d'une Fortune</h2>
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
    <div><input name="id_fortune" id="id_fortune" type="hidden" value="<?= $id; ?>" /></div>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>