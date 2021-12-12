<?php

/**
 * ph143c - mcu
 * Recherche dans les pays
 */
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
    // Formulaire validé : on recherche dans la table pays
    $sql .= " WHERE title like '%$critere%' or screenwriters like '%$critere%' or producers like '%$critere%' or directors like '%$critere%' or status like '%$critere%'or phase like '%$critere%'or us_release_date like '%$critere%'";
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
    <title>ph36d - MCU</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>ph36b - MCU avec un moteur de recherche</h1>

    <img src="img/mcu_logo.png" alt="">
    <p><a href="index.php">Accueil</a></p>
    <p><a href="film_rechercher.php">rechercher</a></p>
    <p>source:<a href="">Marvel Cinematic Universe</a> sur Wikipedia</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Critère<br /><input name="critere" id="critere" type="text" value="<?= $critere ?>" /></p>
        <p><input type="submit" name="submit" value="Chercher" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
    </form>
    <?php

    if (count($rows) > 0) {
    ?>
        <table>
            <tr>

                <th>title</th>
                <th>phase</th>
                <th>Date de sortie USA</th>
                <th>realisateur</th>
                <th>Auteur(s)</th>
                <th>producteur(s)</th>
                <th>statut</th>

            </tr>
            <?php
            foreach ($rows as $row) {
                echo '<tr>';

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
    <p>il y a <?php echo count($rows); ?> film(s)</p>

    <p><a href="film_ajouter.php">Ajouter</a> un film</p>
</body>

</html>