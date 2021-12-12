<?php

/**
 * po42 - MCU avec DAO
 * Suppression d'un film
 */
include 'init.php';

// Instanciation du DAO
$filmDAO = new FilmDAO();

// Récupère l'ID passé dans l'URL 
$id_film = isset($_GET['id_film']) ? $_GET['id_film'] : '';

// Lecture du formulaire
$submit = isset($_POST['submit']);

// Suppression dans la base
if ($submit) {
  // Formulaire validé : on supprime l'enregistrement
  $id_film = $_POST['id_film'];
  // Suppression du film
  $nb = $filmDAO->delete($id_film);
  $title = "";
  $phase = "";
  $us_release_date = "";
  $directors = "";
  $screenwriters = "";
  $producers = "";
  $status = "";
  $message = "$nb film(s) supprimé(s)";
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
  $message = "Veuillez valider la suppression de $title SVP";
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
  <h2>Suppression d'un film</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Titre<br /><input name="title" id="title" type="text" value="<?= $title ?>" disabled /></p>
    <p>Phase<br /><input name="phase" id="phase" type="text" value="<?= $phase ?>" disabled /></p>
    <p>Date sortie USA<br /><input name="us_release_date" id="us_release_date" type="date" value="<?= $us_release_date ?>" disabled /></p>
    <p>Réalisateur(s)<br /><input name="directors" id="directors" type="text" value="<?= $directors ?>" disabled /></p>
    <p>Auteur(s)<br /><input name="screenwriters" id="screenwriters" type="text" value="<?= $screenwriters ?>" disabled /></p>
    <p>Producteur(s)<br /><input name="producers" id="producers" type="text" value="<?= $producers ?>" disabled /></p>
    <p>Statut<br /><input name="status" id="status" type="text" value="<?= $status ?>" disabled /></p>
    <div><input name="id_film" id="id_film" type="hidden" value="<?php echo $id_film; ?>" /></div>
    <p><input type="submit" name="submit" value="Supprimer" />&nbsp;<input type="reset" value="Réinitialiser" /></p>
  </form>
</body>

</html>