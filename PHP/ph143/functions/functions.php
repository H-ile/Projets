<?php
/**
 * ph143 - Europa
 * Fonctions de l'application
 */

/**
 * Connexion à la base de données
 *
 * @return PDO l'objet de connexion pdo
 */
function db_connect()
{
  $dsn = 'mysql:host=localhost;dbname=Europa';  // contient le nom du serveur et de la base
  $user = 'root';
  $password = '';
  try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
  }
  return $dbh;
}

/**
 * Chargement d'un fichier CSV dans un tableau PHP
 *
 * @param string $filename chemin du fichier CSV
 * @param integer $start ligne de départ (1=première ligne)
 * @return array tableau PHP contenant les données chargées à partir du fichier CSV
 */
function load_from_csv(string $filename, int $start = 1)
{
  // Ouverture du fichier
  $file_handler = fopen($filename, "r") or exit("<p>Impossible de lire le fichier $filename</p>");
  $nb = 1;
  $rows = array();
  // Boucle de lecture
  while (!feof($file_handler)) {
    $row = fgetcsv($file_handler, 0, ';');
    if ($nb >= $start) {
      $rows[] = $row;
    }
    $nb++;
  }
  // Fermeture du fichier
  fclose($file_handler);
  // Renvoie le tableau PHP
  return $rows;
}


/**
 * Convertit une date dd/mm/yyyy en yyyy-m-d (format MySQL)
 *
 * @param string $date1 la date au format dd/mm/yyyy
 * @return string la date au format yyyy-m-d
 */
function convertir_date(string $date1)
{
  $datetime = DateTime::createFromFormat('d/m/Y', $date1, new DateTimeZone("Europe/Paris"));
  $date2 = $datetime->format("Y-m-d");
  return $date2;
}
