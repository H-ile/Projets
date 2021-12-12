<?php

/**
 * sec17 - Sécurisation
 * Inscription
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

$messages = array();  // Message d'erreur

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : null;
$submit = isset($_POST['submit']);
// Inscription

if ($submit) {
  try {
    $sth = $dbh->prepare("SELECT * FROM user ");
    $sth->execute();
    $users = $sth->fetchAll(PDO::FETCH_ASSOC);
    //Gestion des erreurs
} catch (PDOException $ex) {
    die("Erreur lors de la requête SQL : " . $ex->getMessage());
}
$verifmail=0 ;

foreach ($users as $user){

 if($user['email'] == $email){

    $verifmail=1 ;
 }

}
if ( $verifmail == 0) {
    //On crypte le mdp
    $password = password_hash($password, PASSWORD_BCRYPT);
    //On insère les champs saisis dans la BDD avec la requête SQL

    try {
    $sql = "INSERT INTO user(login,password,nom, prenom, email, telephone) VALUES (:login,:password,:nom,:prenom,:email,:telephone)";
    $sth = $dbh->prepare($sql);
    $sth->execute(array(
        ':login' => $login,
        ':password' => $password,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':telephone' => $telephone
    ));
    $row = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
  } else {
  $messages[] = "Veuillez vous inscrire";
}
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Inscription</h2>
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
      <p>Login<br /><input type="text" name="login" id="login" value=""></p>
      <p>Password<br /><input type="text" name="password" id="password" value=""></p>
      <p>Nom<br /><input type="text" name="nom" id="nom" value=""></p>
      <p>Prénom<br /><input type="prenom" name="prenom" id="prenom" value=""></p>
      <p>Email<br /><input type="text" name="email" id="email" value=></p>
      <p>Téléphone<br /><input type="text" name="telephone" id="telephone" value=></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>