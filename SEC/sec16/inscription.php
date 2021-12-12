<?php
include 'init.php';
$dbh = db_connect();

// Lecture du formulaire
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : '';

$submit = isset($_POST['submit']);

// Vérifie le user
if ($submit) {
    // -----------------------------
    // inscription
    // -----------------------------
    // le nom est obligatoire
    if (empty(trim($nom))) {
      $messages[] = "le nom est obligatoire";
    }
    // nom est alphanumérique
    if (!ctype_alnum($login)) {
      $messages[] = "le login doit être alphanumérique";
    }
    // -----------------------------  
    // Password
    // -----------------------------
    // le password est obligatoire
    if (empty(trim($password))) {
      $messages[] = "le password est obligatoire";
    }
    // password au minimum 8 caractères
    if (mb_strlen($password) < 8) {
      $messages[] = "le password doit faire au moins 8 car.";
    }
    // password contient au moins une minuscule
    if (!preg_match("#[a-z]#", $password)) {
      $messages[] = "le password doit être alphanumérique";
    }
    // password contient au moins une majuscule
    if (!preg_match("#[A-Z]#", $password)) {
      $messages[] = "le password doit être alphanumérique";
    }
    // password contient au moins un chiffre
    if (!preg_match("#[0-9]#", $password)) {
      $messages[] = "le password doit contenir au moins un chiffre";
    }
    // password contient au moins un caractère spécial
    if (!preg_match("#[\w]#", $password)) {
      $messages[] = "le password doit contenir au moins un caractère spécial";
    }
    // -----------------------------
    // Email
    // Exemple : 1aA$aaaa
    // -----------------------------
    // email est obligatoire
    if (empty(trim($email))) {
      $messages[] = "l'email est obligatoire";
    }
    // email est une adresse valide
    if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
      $messages[] = "le format de l'email est incorrect";
    }
    // nom est obligatoire
    if (empty(trim($nom))) {
      $messages[] = "le nom est obligatoire";
    }
    // nom est alphanumérique
    if (!ctype_alnum($login)) {
      $messages[] = "le nom doit être alphanumérique";
    }
    // age est obligatoire
    if (empty(trim($age))) {
      $messages[] = "l'age est obligatoire";
    }
    // age est un entier
    if (!filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT)) {
      $messages[] = "l'age doit être un entier";
    }
  
    // Pas de message : inscrit !
    if (count($messages) == 0) {
      header("Location: ok.php");
    }
  }

// Ajout dans la base
if ($submit) {
    $sql = "insert into inscription (nom, prenom, age, email, telephone, code_postal) values (:nom,:prenom,:age,:email,:telephone,:code_postal)";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(":nom" => $nom, ":prenom" => $prenom, ":age" => $age, ":email" => $email, ":telephone" => $telephone, ":code_postal" => $code_postal,));
        $nb = $sth->rowcount();
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $message = "$nb d'inscrit(s) créé(s)";
} else {
    $message = "Veuillez saisir un inscrit SVP";
}
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEC16 - Filtres</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>SEC16 - Filtres</h1>
    <h2>Inscription au Marathon de Toulouse</h2>
    <?php include "menu.php"; ?>
    <p><?php echo $message; ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Nom<br /><input name="nom" id="nom" type="text" value="" /></p>
        <p>Prénom<br /><input name="prenom" id="prenom" type="text" value="" /></p>
        <p>age<br /><input name="age" id="age" type="text" value="" /></p>
        <p>Adresse Email<br /><input name="email" id="email" type="text" value="" /></p>
        <p>Numéro de téléphone<br /><input name="telephone" id="telephone" type="text" value="" /></p>
        <p>Code Postal<br /><input name="code_postal" id="code_postal" type="text" value="" /></p>
        <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
    </form>
</body>

</html>