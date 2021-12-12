<?php
//
//  ph27 - compteur de visites avec session
//
// Suppression de la session
session_start();
session_unset(); // Détruit toutes les variables de session
session_destroy(); // Détruit la session (mais pas le cookie)
setcookie(session_name(),'',-1,'/'); //Détruit le cookie de session
// Renvoie sur la page d'accueil
header('Location: index.php');
?>