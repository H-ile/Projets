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
        <title>po01m</title>
    </head>
    <body>
        <h1>po01m</h1>
        <?php
        $voiture1 = new Voiture("voiture1");
        $voiture1->afficher();
        $vehicule1 = new Vehicule("vehicule1");
        $vehicule1->afficher();
        echo "</ul>"; // Pour éviter le bug de afficher() dans la classe mère
        $camion1 = new Camion("camion1");
        $camion1->charger(5000);
        $camion1->afficher();
        echo Vehicule::$nb . " vehicule(s) instancie(s)";
        ?>
    </body>
</html>
