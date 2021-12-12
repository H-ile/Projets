<?php

/**
 * sec06 : exemple d'injection SQL
 */
// Connexion
$dsn = 'mysql:host=localhost;dbname=sec06';  // contient le nom du serveur et de la base
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}


// Récupère le formulaire saisi
$login = isset($_POST['login']) ? $_POST['login'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$submit = isset($_POST['submit']);
$message = "";

// Cherche le user dans la base
if ($submit) {
    try {
        $sql = "select * from user where login = :login and password = :password";
        echo $sql;
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ':login' => $login,
            ':password' => $password
        ));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    if ($sth->rowCount()) {
        $message = "connecté !";
    } else {
        $message = "Essayez encore !";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sec06 - injection SQL</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>sec06 - injection SQL</h1>
    <h2>Connexion</h2>
    <p><?= $message; ?></p>
    <form action="index.php" method="post">
        <p>Login<br><input type="text" name="login" id="login"></p>
        <p>Password<br><input type="text" name="password" id="password"></p>
        <p><input type="submit" name="submit" value="OK"></p>
    </form>

</body>

</html>