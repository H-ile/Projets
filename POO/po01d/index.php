<?php
include "class/Voiture.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>po01c</title>
    </head>
    <body>
        <?php
        // Voiture 1
        $voiture1 = new Voiture("voiture1");
        $voiture1->afficher();
        // Voiture 2
        $voiture2 = new Voiture("voiture2");
        $voiture2->marque = "Renault";
        $voiture2->modele = "Megane";
        $voiture2->compteur = 0;
        $voiture2->demarrer();
        $voiture2->avancer(200);
        $voiture2->arreter();
        $voiture2->afficher();
        ?>
    </body>
</html>
