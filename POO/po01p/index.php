<?php

function my_autoloader($classe) {
  include 'class/' . $classe . '.php';
}

spl_autoload_register('my_autoloader');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>po01p</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <h1>po01p</h1>
    <?php
    try {
      $voiture1 = new Voiture("voiture1");
      $voiture1->avancer(100);   // Erreur
      $voiture1->afficher();
      $camion1 = new Camion("camion1");
      $camion1->charger(-5000); // Erreur
      $camion1->demarrer();
      $camion1->avancer(300);
      $camion1->afficher();
    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
    echo "<p>".Vehicule::$nb . " véhicule(s) instancié(s)</p>";
    ?>
  </body>
</html>
