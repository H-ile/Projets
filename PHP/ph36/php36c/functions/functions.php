<?php

function db_connect()
{
  $dsn = 'mysql:host=localhost;dbname=marvel';  // contient le nom du serveur et de la base
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


function convertir_date(string $date1)
{
  $datetime = DateTime::createFromFormat('d/m/Y', $date1, new DateTimeZone("Europe/Paris"));
  $date2 = $datetime->format("Y-m-d");
  return $date2;
}
