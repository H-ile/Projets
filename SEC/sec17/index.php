<?php

/**
 * sec17 - Sécurisation
 * Page d'accueil
 */
// Initialisations
include 'init.php';

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Page d'accueil</h2>
    <?php 
    if (isset($_SESSION["user"])){
      $user = $_SESSION["user"];
      echo "<p>".$user["prenom"]." ".$user["nom"]." est connecté</p>";
    }
    include "menu.php";
    ?>
    <p>Bienvenue sur le sec17, la référence sur les sites sécurisés !</p>
  </div>
</body>

</html>