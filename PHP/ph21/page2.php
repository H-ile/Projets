<?php
include('inc/nuages.inc.php');
// Récupère les données qui seront affichées dans la page
$nuage = isset($_GET['nuage']) ? $_GET['nuage'] : '???';
$famille = $familles[$nuage];
$lib_famille = $lib_familles[$famille];
$description = $descriptions[$nuage];
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
      <h2>Le <?php echo($nuage); ?></h2>
      <p>Famille : <?php echo($famille); ?> (<?php echo($lib_famille); ?>)</p>
      <p><img src="img/<?php echo($nuage); ?>.jpg" alt="<?php echo($nuage); ?>" title="<?php echo($nuage); ?>" height="300" width="400" /></p>
      <p><?php echo($description); ?></p>
      <p>Retourner à la <a href="index.php">page d'accueil</a></p>
    </div>
  </body>
</html>