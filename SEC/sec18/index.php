<?php

/**
 * sec18 - RésaVite
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
  <title>sec18 - RésaVite</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec18 - RésaVite</h1>
    <h2>Page d'accueil</h2>
    <?php 
      include "menu.php"; // Le menu complet ne s'affiche que si on est connecté
    ?>
    <p>Bienvenue sur le sec18, la référence sur les sites sécurisés !</p>
  </div>
</body>

</html>