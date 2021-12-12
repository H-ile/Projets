<?php

//include "class/Voiture.php";
function my_autoloader($classe) {
  include 'class/' . $classe . '.php';
}

spl_autoload_register('my_autoloader');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>po01j</title>
  </head>
  <body>
    <h1>po01j</h1>
    <?php
    $voiture1 = new Voiture("voiture1");
    $voiture1->afficher();
    $vehicule1 = new Vehicule("vehicule1");
    $vehicule1->afficher();
    $camion1 = new Camion("camion1");
    $camion1->charger(5000);
    $camion1->charger(200);
    $camion1->charger(-1000);
    $camion1->afficher();
    ?>
  </body>
</html>
