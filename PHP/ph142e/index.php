<?php
/**
 * Page d'accueil
 */
// Affichage

include 'functions/log.php';
$page='index.php';
logToDisk($page);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ph142b - Terminator</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>ph142b - Terminator</h1>
<h2>Page d'accueil</h2>
<?php
include "menu.php";
?>
<p>Bienvenue sur le ph142b, la référence sur Terminator !</p>
</body>
</html>