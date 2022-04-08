<?php
/**
 * Page d'accueil po22
 */
function my_autoloader($classe)
{
    include 'classes/'.$classe.'.php';
}
spl_autoload_register('my_autoloader');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>po22 : permis</title>
</head>

<body>
  <?php
$permis1 = new Permis("Dominic", "Toretto");
$permis1->set_type("a");
$permis2 = new Permis("Deckard", "Shaw");
$permis2->set_type("g"); // Erreur
$permis2->set_type("c");
$permis3 = new Permis("Luke", "Hobbs");
$permis3->set_type("d");
$permis1->retirer(4); //  12 - 4 = 8
$permis2->retirer(5); // 12 - 5 = 7
$permis3->retirer(15); // Erreur
$permis1->ajouter(2); // 8 + 2 = 10
$permis1->afficher();
$permis2->afficher();
$permis3->afficher();
?>
</body>

</html>