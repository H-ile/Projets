<?php
include 'config.php';
// Connexion à la base
// Liste des personnes
$sql = 'select*from items';
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph32-ToDo List</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="list">
    <h1 class="header">To do.</h1>
    <ul class="items">
      <?php
      if (count($rows) > 0) {
        foreach ($rows as $row){
       
        echo '<li>';
        if ($row['done'] == 1) {
          echo '<span class="item done">'. $row['name'].'</span>';
        
        }else{
          echo '<span class="item">'. $row['name'].'</span>';
          echo '<a href="mark.php?as=done&id="'. $row['id'].'class="done-button">mark as done</a>';
        
        echo'</li>';
        }else {
        echo "<p>Rien à afficher</p>";
        }
        }
      }

      ?>

    </ul>
    <form action="add.php" method="post" class="item-add">
      <input type="text" name="name" id="name" placeholder="Type a new item here" class="input" autocomplete="off" required>
      <input type="submit" value="Add" class="submit">
    </form>
  </div>
</body>

</html>