<!DOCTYPE html>
<html lang="fr">
<?php
include 'ini.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>poo4</title>
</head>

<body>
    <?php
    $compte1 = new Compte("Bill Gates", 500);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->crediter(200);
    $compte1->debiter(10000);
    $compte1->afficher();
    $compte2 = new Compte("Donald Trump", 100);
    $compte2->set_devise("F");
    $compte2->set_devise("$");
    $compte2->afficher();
    $compte2->crediter(500);
    $compte2->crediter(-200);
    $compte2->debiter(50);
    $compte2->afficher();
    $compte3 = new depot("Elon Musk",100,"");
    $compte3->set_devise("F");
    $compte3->set_devise("$");
    $compte3->afficher();
    $compte3->crediter(500);
    $compte3->crediter(-200);
    $compte3->debiter(50);
    $compte3->set_chequier("true");
    $compte3->set_cartebanquaire("true");
    $compte3->afficher();
    $compte4 = new Epargne("Bernard Arnaud",100,"");
    $compte4->set_devise("F");
    $compte4->set_devise("$");
    $compte4->afficher();
    $compte4->crediter(500);
    $compte4->crediter(-200);
    $compte4->debiter(50);
    $compte4->set_taux_int(3.5);
    $compte4->afficher();
    $compte1 = NULL;
    $compte2 = NULL;
    $compte3 = NULL;
    $compte4 = NULL ;

    ?>
</body>

</html>