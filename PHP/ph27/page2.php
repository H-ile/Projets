<?php
//
//  ph27 - compteur de visites avec session
//
// Gestion de la session
session_start();
$compteurs=array(0,0,0);
if (isset($_SESSION['compteurs'])){
  // La session existe
  $compteurs=$_SESSION['compteurs'];
  $compteurs[1]++;
  $_SESSION['compteurs']=$compteurs;
} else {
  // La session n'existe pas
  $compteurs[1]=1;
  $_SESSION['compteurs']=$compteurs;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph27 - compteur de visites avec session</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>ph27 - compteur de visites avec session</h1> 
  <h2>Page 2</h2>
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
    <tr><td>Nr de session : <?php echo session_id(); ?></td></tr>
    <tr><td>Nom de session : <?php echo session_name(); ?></td></tr>
  </table>
</body>
</html>