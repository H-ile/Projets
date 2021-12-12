<?php

/**
 * sec18 - RésaVite
 * Menu de l'application
 */
if (isset($_SESSION["user"])) {
  // Menu si on est connecté
  echo "<p>" . $_SESSION["user"]["prenom"] . " " . $_SESSION["user"]["nom"] . " est connecté</p>";
  echo '<ul>';
  echo '<li><a href="index.php">Accueil</a></li>';
  echo '<li><a href="reserver.php?id_user='.$_SESSION["user"]["id_user"].'">Réserver</a></li>';
  echo '<li><a href="reservations.php?id_user='.$_SESSION["user"]["id_user"].'">Réservations</a></li>';
  echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
  echo '</ul>';
} else {
  // Menu si on n'est pas connecté
  echo '<ul>';
  echo '<li><a href="index.php">Accueil</a></li>';
  echo '<li><a href="connexion.php">Connexion</a></li>';
  echo '</ul>';
}
