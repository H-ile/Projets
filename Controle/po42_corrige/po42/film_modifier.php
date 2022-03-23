<?php

/**
 * po42 - MCU avec DAO
 * Modification d'un film
 */
// Initialisations
include 'init.php';

// Instanciation du DAO
$filmDAO = new FilmDAO();

// Récupère l'ID passé dans l'URL 
$id_film = isset($_GET['id_film']) ? $_GET['id_film'] : '';

// Lecture du formulaire
$title = isset($_POST['title']) ? $_POST['title'] : '';
$phase = isset($_POST['phase']) ? $_POST['phase'] : '';
$us_release_date = isset($_POST['us_release_date']) ? $_POST['us_release_date'] : '';
$directors = isset($_POST['directors']) ? $_POST['directors'] : '';
$screenwriters = isset($_POST['screenwriters']) ? $_POST['screenwriters'] : '';
$producers = isset($_POST['producers']) ? $_POST['producers'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';

$submit = isset($_POST['submit']);

// Modification dans la base
if ($submit) {
  // Formulaire validé : on modifie l'enregistrement
  $id_film = $_POST['id_film'];

  $film=new Film(array(
    "id_film" => $id_film,
    "title" => $title,
    "phase" => $phase,
    "us_release_date" => $us_release_date,
    "directors" => $directors,
    "screenwriters" => $screenwriters,
    "producers" => $producers,
    "status" => $status,
    )
  );
  $nb = $filmDAO->update($film);
  $message = "$nb film(s) modifié(s)";
} else {
  // Formulaire non encore validé : on affiche l'enregistrement
  $row = $filmDAO->find($id_film);
  $title = $row->get_title();
  $phase = $row->get_phase();
  $us_release_date = $row->get_us_release_date();
  $directors = $row->get_directors();
  $screenwriters = $row->get_screenwriters();
  $producers = $row->get_producers();
  $status = $row->get_status();
  $message = "Veuillez réaliser la modification de $title SVP";
}
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
  <h2>Modification d'un film</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="title" id="title" type="text" value="<?= $title ?>" /></p>
    <p>Phase<br /><input name="phase" id="phase" type="text" value="<?= $phase ?>" /></p>
    <p>Date sortie USA<br /><input name="us_release_date" id="us_release_date" type="date" value="<?= $us_release_date ?>" /></p>
    <p>Réalisateur(s)<br /><input name="directors" id="directors" type="text" value="<?= $directors ?>" /></p>
    <p>Auteur(s)<br /><input name="screenwriters" id="screenwriters" type="text" value="<?= $screenwriters ?>" /></p>
    <p>Producteur(s)<br /><input name="producers" id="producers" type="text" value="<?= $producers ?>" /></p>
    <p>Statut<br /><input name="status" id="status" type="text" value="<?= $status ?>" /></p>
    <div><input name="id_film" id="id_film" type="hidden" value="<?= $id_film; ?>" /></div>
    <p><input type="submit" name="submit" value="Envoyer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>