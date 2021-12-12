<?php
/**
 * po27b : supprimer un pays
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
    // Supprime l'enregistrement dans la BD
    $paysDAO->delete($id);
    // Redirection vers la liste des pays
    header('Location: liste_pays.php');
} else {
    // Formulaire non soumi : lit l'objet métier
    $pays = $paysDAO->find($id);
    $is_disabled=true; // Empèche toute saisie
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
  <h2>Supprimer un pays</h2>
  <?php include "menu.php"; ?>
  <?php require_once "paysForm.php"; ?>
</body>

</html>