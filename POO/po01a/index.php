<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo1</title>
</head>
<body>
    <h1>poo1</h1>
    <?php
    include "class/voiture.php";
    $v1 = new voiture ();
    $v1-> nom = "la caisse à savon";
    $v1-> marque = "Volkswagen";
    $v1->modele = "Polo 7";
    $v1->demarrer();
    $v1->avancer(100);
    $v1->arreter();
    echo "<p>-----------Description de la voiture 1-------------</p>";
    $v1->afficher();

    $v2 = new voiture ();
    $v2-> nom = "merguez";
    $v2-> marque = "Honda";
    $v2->modele = "Civic";
    $v2->demarrer();
    $v2->avancer(200);
    $v2->arreter();
    echo "<p>-----------Description de la voiture 2-------------</p>";
    $v2->afficher();

    ?>
</body>
</html>