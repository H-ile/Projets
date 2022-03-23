<?php

/**
 * po42 - MCU avec DAO
 * Suppression d'un film
 */
include 'init.php';

// Instanciation du DAO
$fortuneDAO = new FortuneDAO();

// Récupère l'ID passé dans l'URL 
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Lecture du formulaire
$submit = isset($_POST['submit']);

// Suppression dans la base
if ($submit) {
  // Formulaire validé : on supprime l'enregistrement
  $id = $_POST['id'];
  // Suppression du film
  $nb = $fortuneDAO->delete($id);
  $rang = "";
  $nom = "";
  $siege = "";
  $pays = "";
  $chiffre = "";
  $benef = "";
  $employes = "";
  $branche = "";
  $ceo = "";
  $evolution = "";
  $message = "$nb fortune(s) supprimé(s)";
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
  $message = "Veuillez valider la suppression de $nom SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po38 - fortunes</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po38 - fortune</h1>
  <h2>Suppression d'une fortune</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Rang<br /><input name="rang" id="rang" type="text" value="" disabled/></p>
    <p>Nom<br /><input name="nom" id="nom" type="text" value="" disabled/></p>
    <p>Siège Social<br /><input name="siege" id="siege" type="text" value="" disabled/></p>
    <p>Pays<br /><input name="pays" id="pays" type="text" value="" disabled/></p>
    <p>Chiffre d'affaire<br /><input name="ca" id="ca" type="text" value="" disabled/></p>
    <p>Bénéfice<br /><input name="benefice" id="benefice" type="text" value="" /></p>
    <p>Nombre d'employés<br /><input name="nb_employes" id="nb_employes" type="text" value="" disabled/></p>
    <p>Branche<br /><input name="nb_employes" id="nb_employes" type="text" value="" disabled/></p>
    <p>Directeur<br /><input name="directeur" id="directeur" type="text" value="" disabled/></p>
    <p>Evolution<br /><input name="evolution" id="evolution" type="text" value="" disabled/></p>
    <div><input name="id_film" id="id_film" type="hidden" value="<?php echo $id_film; ?>" /></div>
    <p><input type="submit" name="submit" value="Supprimer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>