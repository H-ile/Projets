<?php
include('inc/nuages.inc.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph21 - Les nuages</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <div id="content">
    <h1>ph21 - Les nuages</h1>
    <p>Choisissez votre nuage :</p>
    <ul>
<?php
// Affiche la liste des nuages sous la forme de liens dans une liste à puce
foreach($familles as $cle=>$valeur)  {
  echo('<li><a href="page2.php?nuage='.$cle.'">'.$cle.'</a></li>');
}
?>
    </ul>
  </div>  
</body>
</html>