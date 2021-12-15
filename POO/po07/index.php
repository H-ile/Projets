<?php
// Connexion à la base de données
include('inc/connexion_bd.inc.php');
// Nota :
// Les formats acceptés par la méthode format() sont décrits ici
// http://php.net/manual/fr/function.date.php
// Les fuseaux horaires sont ici
// http://php.net/manual/fr/timezones.php
// Les formats pour les intervalles de la classe DateInterval sont ici :
// http://php.net/manual/fr/dateinterval.format.php
// Les formats des périodes d'intervalle sont ici
// http://php.net/manual/fr/dateinterval.construct.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po07 - Classe DateTime</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <h1>po07 - Classe DateTime</h1>
  <?php
        try {
            //
            // Le code ici
            //
        } catch (Exception $ex) {
            echo "<p>Message = " . $ex->getMessage() . "</p>";
        }
        ?>
</body>

</html>