<?php
/**
 * ph36d - MCU avec moteur de recherche
 * Fonctions
 */

/**
 * Connexion à la base de données
 *
 * @return pdo objet de connexion
 */
function db_connect() {
  // Récupère le user et le password de la base dans le fichier CSV
  $rows = load_from_csv("connexion.csv");
  $row = isset ($rows[0]) ? $rows[0] : null;
  $user = $row[0];
  $password = $row[1];
  $base = $row[2];
  $dsn = "mysql:host=localhost;dbname=$base";  // contient le nom du serveur et de la base
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

