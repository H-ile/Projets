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
  // Récupère le user et le password de la base dans le fichier INI
  $rows = parse_ini_file("params/connexion.ini");
  //print_r($rows);
  $user = $rows["user"];
  $password = $rows["password"];
  $base =  $rows["base"];
  $dsn = "mysql:host=localhost;dbname=$base";  // contient le nom du serveur et de la base
  try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $ex) {
    die("Erreur lors de la connexion SQL : " . $ex->getMessage());
  }
  return $dbh;
}



