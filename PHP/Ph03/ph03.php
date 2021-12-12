<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boucle for en PHP</title>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <h1>Exemple de boucle for en PHP</h1>
  <?php
  echo "<ul>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<li>" . $i . "</li>";
  }
  echo "</ul>";
  echo "<table>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>

</body>

</html>