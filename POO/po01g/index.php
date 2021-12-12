<?php
include "class/Voiture.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>po01g</title>
  </head>
  <body>
    <?php
    $voiture1 = new Voiture("voiture1");
    $voiture1->set_marque("Honda");
    $voiture1->afficher();
    $voiture2 = new Voiture("voiture2");
    $voiture2->set_marque("Renault");
    $voiture2->set_modele("Megane");
    $voiture2->set_compteur(0);
    $voiture2->demarrer();
    $voiture2->avancer(-200);
    $voiture2->arreter();
    echo "<p>Mon nom est " . $voiture2->get_nom() . "</p>";
    $voiture2->afficher();
    echo "<p>constante DEMARREE = ".Voiture::DEMARREE."</p>";
    echo "<p>constante ARRETEE = ".Voiture::ARRETEE."</p>";
    ?>
  </body>
</html>
