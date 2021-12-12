<?php
//
//  ph26 - like
//
// Gestion de la session
session_start();
$likes=array();
// Récupère les données du formulaire
$like = isset($_POST['like']) ? $_POST['like'] : null;
$submit = isset($_POST['submit']);

if ($submit) {
  if (isset($_SESSION['likes'])) {
      // La session existe
      $likes=$_SESSION['likes'];
  }  
    $likes[]=$like;
    $_SESSION['likes']=$likes;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph26 - like</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>ph26 - like</h1> 
  <h2>Ajouter ce que vous aimez !</h2>
  <form action="index.php" method="post">
    <p>J'aime <input type="text" name="like" value="">&nbsp;<input type="submit" name="submit" value="Ajouter"></p>
  </form>
  <h2>Vous aimez ...</h2>
  <ul>
  <p>Effacer la <a href="raz.php" >liste</a></p>
<?php
  foreach($likes as $value){
    echo "<li>";
    echo $value;
    echo "</li>";
  }
?>
  </ul>
</body>
</html>