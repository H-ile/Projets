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
        <title>po01o</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <h1>po01o</h1>
        <?php
        $voiture1 = new Voiture("voiture1");
        $voiture1->demarrer();
        $voiture1->avancer(100);
        $voiture1->afficher();
        /* IMPOSSIBLE à faire si la classe est abstraite !
        $vehicule1 = new Vehicule("vehicule1");
        $vehicule1->demarrer();
        $vehicule1->avancer(200);
        $vehicule1->afficher();
         */
        $camion1 = new Camion("camion1");
        $camion1->charger(5000);
        $camion1->demarrer();
        $camion1->avancer(300);
        $camion1->afficher();
        echo Vehicule::$nb . " véhicule(s) instancié(s)";
        ?>
    </body>
</html>
