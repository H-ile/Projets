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
        <title>po01n</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <h1>po01n</h1>
        <?php
        $voiture1 = new Voiture("voiture1");
        $voiture1->demarrer();
        $voiture1->avancer(100);
        $voiture1->afficher();
        $vehicule1 = new Vehicule("vehicule1");
        $vehicule1->demarrer();
        $vehicule1->avancer(200);
        $vehicule1->afficher();
        echo "</ul>"; // Pour éviter le bug de afficher() dans la classe mère
        $camion1 = new Camion("camion1");
        $camion1->charger(5000);
        $camion1->demarrer();
        $camion1->avancer(300);
        $camion1->afficher();
        echo Vehicule::$nb . " véhicule(s) instancié(s)";
        ?>
    </body>
</html>
