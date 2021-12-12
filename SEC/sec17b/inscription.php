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
  // Vérification des champs
  // Login obligatoire
  if (empty(trim($login))) {
    $messages[] = "le login est obligatoire";
  }
  // password obligatoire
  if (empty(trim($password))) {
    $messages[] = "le password est obligatoire";
  }
  // nom obligatoire
  if (empty(trim($nom))) {
    $messages[] = "le nom est obligatoire";
  }
  // prénom obligatoire
  if (empty(trim($prenom))) {
    $messages[] = "le prénom est obligatoire";
  }
  // email obligatoire
  if (empty(trim($email))) {
    $messages[] = "l'émail est obligatoire";
  }
  // l'email est valide
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $messages[] = "l'email n'est pas valide : $email";
  }
  // téléphone obligatoire
  if (empty(trim($telephone))){
    $messages[] = "le téléphone est obligatoire";
  }
  // le téléphone est un entier
  if (filter_var($telephone, FILTER_VALIDATE_INT) === false) {
    $messages[] = "le téléphone n'est pas un nombre entier : $telephone";
  }
  if (count($messages) == 0) {
    // Inscription de l'utilisateur
    $hash = password_hash($password, PASSWORD_DEFAULT);
    //$sql = "INSERT INTO user(login,password,nom, prenom, email, telephone) VALUES ('$login','$hash','$nom','$prenom','$email','$telephone')";
    $sql = "INSERT INTO user(login,password,nom, prenom, email, telephone) VALUES (:login,:hash,:nom,:prenom,:email,:telephone)";
    $params = array(
      ':login'=>$login,
      ':hash'=>$hash,
      ':nom'=>$nom,
      ':prenom'=>$prenom,
      ':email'=>$email,
      ':telephone'=>$telephone
    );
    try {
      $sth = $dbh->prepare($sql);
      $sth->execute($params);
      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $messages[] = "$nb inscription(s)";
  }
} else {
  $messages[] = "Veuillez vous inscrire";
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
    if (isset($_SESSION["user"])) {
      $user = $_SESSION["user"];
      echo "<p>" . $user["prenom"] . " " . $user["nom"] . " est connecté</p>";
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
      <p>Password<br /><input type="password" name="password" id="password" value="<?= $password ?>"></p>
      <p>Nom<br /><input type="text" name="nom" id="nom" value="<?= $nom ?>"></p>
      <p>Prénom<br /><input type="prenom" name="prenom" id="prenom" value="<?= $prenom ?>"></p>
      <p>Email<br /><input type="text" name="email" id="email" value="<?= $email ?>"></p>
      <p>Téléphone<br /><input type="text" name="telephone" id="telephone" value="<?= $telephone ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>