<?php
/**
 * po42 - MCU avec DAO
 * Liste des films
 */

// Initialisations
include 'init.php';

// Instanciation du DAO
$filmDAO = new FilmDAO();

// Liste des films MCU
$rows = $filmDAO->findAll();

$classe = "impair";
// Affichage
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po42 - MCU avec DAO</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>po42 - MCU avec DAO</h1>
  <h2>Liste des films</h2>
  <?php include "menu.php"; ?>
  <div><img src="img/mcu_logo.png" alt="logo mcu"></div>
  <p>Source : <a href="https://en.wikipedia.org/wiki/Marvel_Cinematic_Universe" target="_blank">Marvel Cinematic Universe</a> sur Wikipédia</p>
  <table>
    <tr>
      <th>Titre</th>
      <th>Phase</th>
      <th>Poster</th>
      <th>Date sortie USA</th>
      <th>Réalisateur(s)</th>
      <th>Auteur(s)</th>
      <th>Producteur(s)</th>
      <th>Statut</th>
      <th>&nbsp;</th>
    </tr>
    <?php
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>".$row->get_title()."</td>";
            echo "<td>".$row->get_phase()."</td>";
            $id = sprintf("%02d", $row->get_id_film());  // Formate l'ID sur deux chiffres
            $file = "img/".$id.".jpg";  // Reconstitue le nom du fichier du poster
            if (file_exists($file)) {  // Vérifie que le fichier du poster existe
              echo '<td><img src="'.$file.'" height="100" ></td>';
            } else {
                echo "<td>???</td>";
            }
            echo "<td>".$row->get_us_release_date()."</td>";
            echo "<td>".$row->get_directors()."</td>";
            echo "<td>".$row->get_screenwriters()."</td>";
            echo "<td>".$row->get_producers()."</td>";
            echo "<td>".$row->get_status()."</td>";
            echo '<td><a href="film_modifier.php?id_film='.$row->get_id_film().'">Modifier</a>&nbsp;';
            echo '<a href="film_supprimer.php?id_film='.$row->get_id_film().'">Supprimer</a></td>';
            echo "</tr>";
        }
    ?>
  </table>
  <?php
    // Nombre de films
    echo "<p>Il y a ".count($rows). " film(s)</p>";
    ?>
    <p><a href="film_ajouter.php">Ajouter</a> un film</p>
</body>

</html>