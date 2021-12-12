<?php
//
//  ph25 - compteur de visites avec cookie
//
// Suppression du cookie
setcookie("compteur",'',time()-3600);
// Renvoie sur la page d'accueil
header('Location: index.php');
?>