<?php
/**
 * po27b : ajouter un pays
 */
require_once "init.php";

// Instanciation des DAO
$paysDAO = new PaysDAO();

// Récupère l'ID dans l'URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Lecture du formulaire
$submit = isset($_POST['submit']);
if ($submit) {
    // Formulaire soumi
    // Récupère les données du formulaire
    $code = isset($_POST['code']) ? $_POST['code'] : null;
    $alpha2 = isset($_POST['alpha2']) ? $_POST['alpha2'] : null;
    $alpha3 = isset($_POST['alpha3']) ? $_POST['alpha3'] : null;
    $nom_en = isset($_POST['nom_en']) ? $_POST['nom_en'] : null;
    $nom_fr = isset($_POST['nom_fr']) ? $_POST['nom_fr'] : null;
    // Crée un objet pays à l'image des données
    $pays = new Pays(array(
      'code'=>$code,
      'alpha2'=>$alpha2,
      'alpha3'=>$alpha3,
      'nom_en'=>$nom_en,
      'nom_fr'=>$nom_fr
  ));
    // Ajoute l'enregistrement dans la BD
    $paysDAO->insert($pays);
    // Redirection vers la liste des pays
    header('Location: liste_pays.php');
} else {
    // Formulaire non soumi
    // Initialise l'objet métier
    $pays = new Pays();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po27b</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po27b</h1>
  <h2>Ajouter un pays</h2>
  <?php include "menu.php"; ?>
  <?php require_once "paysForm.php"; ?>
</body>

</html>