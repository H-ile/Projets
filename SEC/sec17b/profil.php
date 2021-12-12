<?php

/**
 * sec17 - Sécurisation
 * Profil de l'utilisateur
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

// Récupère l'id utilisateur dans la query string
//$id_user = isset($_GET["id"]) ? $_GET["id"] : null;
// Récupère l'id utilisateur dans la sessoin
if (isset($_SESSION["user"]["id_user"])) {
  $id_user = $_SESSION["user"]["id_user"];
  // Lecture en base des données de l'utilisateur
  $sql = "select * from user where id_user=$id_user";
  try {
    $sth = $dbh->query($sql);
    $row = $sth->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
} else {
  $row["login"]="???";
  $row["password"]="???";
  $row["nom"]="???";
  $row["prenom"]="???";
  $row["email"]="???";
  $row["telephone"]="???"; 
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Profil de l'utilisateur</h2>
    <?php
    if (isset($_SESSION["user"])) {
      $user = $_SESSION["user"];
      echo "<p>" . $user["prenom"] . " " . $user["nom"] . " est connecté</p>";
    }
    include "menu.php";
    ?>
    <ul>
      <li>Login : <?= $row["login"] ?></li>
      <li>Password : <?= $row["password"] ?></li>
      <li>Nom : <?= $row["nom"] ?></li>
      <li>Prénom : <?= $row["prenom"] ?></li>
      <li>Email : <?= $row["email"] ?></li>
      <li>Téléphone : <?= $row["telephone"] ?></li>
    </ul>
  </div>
</body>

</html>