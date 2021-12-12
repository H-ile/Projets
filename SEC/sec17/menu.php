<?php

/**
 * sec17 - Sécurisation
 * Menu de l'application
 */
$id_user = isset($_SESSION["user"]) ? $_SESSION["user"]["id_user"] : null ;
?>
<ul>
  <li><a href="index.php">Accueil</a></li>
  <li><a href="inscription.php">Inscription</a></li>
  <li><a href="profil.php?id=<?=$id_user ?>">Profil</a></li>
  <li><a href="connexion.php">Connexion</a></li>
  <li><a href="deconnexion.php">Déconnexion</a></li>
</ul>