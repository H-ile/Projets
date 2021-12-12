<?php
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Lecture du formulaire
$critere = isset($_POST['critere']) ? $_POST['critere'] : null;

$submit = isset($_POST['submit']);

// Construction de l'ordre SQL
$sql = "SELECT * FROM mcu";
$where = null;
if ($submit) {
  // Formulaire validé
  $sql .= " WHERE title like '%$critere%' or phase like '%$critere%' or us_release_date like '%$critere%' or directors like '%$critere%' or screenwriters like '%$critere%' or producers like '%$critere%' or status like '%$critere%'";
}
$sql .= " ORDER by id";
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
}

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php36 - Marvel</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph36d - MCU avec moteur de recherche</h1>
  <h2>Chercher des films</h2>
  <li><a href="index.php">Accueil</a></li>

  <!-- Formulaire de recherche -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Critère<br /><input name="critere" id="critere" type="text" value="<?= $critere ?>" /></p>
    <p><input type="submit" name="submit" value="Chercher" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
  <!-- Résultats -->
  <?php
  if (count($rows) > 0) {
  ?>
    <table>
      <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Phase</th>
        <th>Date de sortie USA</th>
        <th>Réalisateur(s)</th>
        <th>Auteur(s)</th>
        <th>Producteur(s)</th>
        <th>Statut</th>
      </tr>
      <?php
      foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['title'] . '</td>';
        echo '<td>' . $row['phase'] . '</td>';
        echo '<td>' . $row['us_release_date'] . '</td>';
        echo '<td>' . $row['directors'] . '</td>';
        echo '<td>' . $row['screenwriters'] . '</td>';
        echo '<td>' . $row['producers'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo "</tr>";
      } ?>
    </table>
  <?php
  } else {
    echo "<p>Rien à afficher</p>";
  }
  ?>
  <p><?php echo count($rows); ?> film(s)</p>
</body>

</html>