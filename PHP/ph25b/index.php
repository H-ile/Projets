<?php
//
//  ph25b - compteur de visites avec cookie et par page
//
// Gestion du cookie
$compteurs=array(0,0,0);
if (isset($_COOKIE["compteurs"])) {
  // Le cookie existe
  $compteurs=explode(',',$_COOKIE["compteurs"]);  // Convertit la chaîne en tableau (le cookie n'accepte pas les tableaux)
  $compteurs[0]++;
  setcookie("compteurs",implode(',',$compteurs)); // Convertit le tableau en chaîne  
} else {
  // Le cookie n'existe pas
  $compteurs[0]=1;
  setcookie("compteurs",implode(',',$compteurs)); // Convertit le tableau en chaîne 
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph25b - compteur de visites par page</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>ph25b - compteur de visites par page</h1> 
  <h2>Page d'accueil</h2>
  <ul>
    <li><a href="index.php" >Page d'accueil</a></li>
    <li><a href="page2.php" >Page 2</a></li>
    <li><a href="page3.php" >Page 3</a></li>
    <li><a href="raz.php" >raz compteur</a></li>  
  </ul>
  <table>
    <tr><td><?php echo $compteurs[0],' visite(s) de la page d\'accueil' ?></td></tr>
    <tr><td><?php echo $compteurs[1],' visite(s) de la page 2' ?></td></tr>
    <tr><td><?php echo $compteurs[2],' visite(s) de la page 3' ?></td></tr>
  </table>
</body>
</html>