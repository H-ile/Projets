<?php
include "class/Voiture.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>po01e</title>
  </head>
  <body>
    <?php
    $voiture1 = new Voiture("lulu");
    $voiture1->set_marque("Honda");
    $voiture1->afficher();
    $voiture2 = new Voiture("lala");
    $voiture2->nom = "voiture2";
    $voiture2->set_marque("Renault");
    $voiture2->modele = "Megane";
    $voiture2->compteur = 0;
    $voiture2->demarrer();
    $voiture2->avancer(200);
    $voiture2->arreter();
    echo "<p>Mon nom est " . $voiture2->nom . "</p>";
    $voiture2->afficher();
    ?>
  </body>
</html>
