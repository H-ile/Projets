<?php 
include('Class/Tortue.php');
$tortue1 = new Tortue();
$tortue1->set_nom("Leonardo");
$tortue1->set_surnom("Leo");
$tortue1->set_couleur("bleu");
echo $tortue1->afficher();

?>