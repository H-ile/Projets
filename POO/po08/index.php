<?php
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : ''; 
$datetime = new DateTime($date_naissance, new DateTimeZone('Europe/Paris'));
$intervalle = $datetime->diff(new DateTime("now",new
DateTimeZone('Europe/Paris')));
$ans = $intervalle->y;
$mois = $intervalle->m;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po08 - Age</title>
</head>
<body>
    <h1>Po08 Age</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Votre date de naissance<br /><input name="date_naissance" id="date_naissance" type="date" value="sysdate" /></p>
    <p><input type="submit" name="submit" value="Envoyer" /></p>
    </form>
    <?php echo "Vous avez $ans an(s) et $mois mois</p>";?>
</body>
</html>