<?php
//
//  ph25b - compteur de visites avec cookie et par page
//
// Suppression du cookie
setcookie("compteurs",'',time-3600);
// Renvoie sur la page d'accueil
header('Location: index.php');
exit;
?>