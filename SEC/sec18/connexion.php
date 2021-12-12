<?php

/**
 * sec18 - RésaVite
 * Connexion de l'utilisateur
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

$messages = array();  // Message d'erreur

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$submit = isset($_POST['submit']);

// Vérifie la connexion
if ($submit) {
  // cherche le login et vérifie le password
    $sql = "select * from user where login='$login' and password='$password'";
    try {
      $sth = $dbh->query($sql);
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    if ($row===false){
      $messages[] = "login et/ou password invalide(s), veuillez réessayer !";
    } else {
      // Connexion réussie, enregistrement en session
      $_SESSION["user"] = $row;
      header("Location: reservations.php?id_user=".$row["id_user"]);
    }
} else {
  $messages[] = "Veuillez vous connecter";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec18 - RésaVite</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec18 - RésaVite</h1>
    <h2>Connexion</h2>
    <?php 
    if (isset($_SESSION["user"])){
      $user = $_SESSION["user"];
      echo "<p>".$user["prenom"]." ".$user["nom"]." est connecté</p>";
    }
    include "menu.php";
    ?>
    <?php
    if (count($messages) > 0) {
      echo "<ul>";
      foreach ($messages as $message) {
        echo "<li>" . $message . "</li>";
      }
      echo "</ul>";
    }
    ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Login<br /><input type="text" name="login" id="login" value="<?= $login ?>"></p>
      <p>Password<br /><input type="text" name="password" id="password" value="<?= $password ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>