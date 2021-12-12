<?php
/**
* Classe DAO DepartementDAO
*
* @author gus
*/

class DepartementDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'un département par son ID
  * @param int ID du département
  * @return \Departement
  * @throws Exception
  */
    function find($id) {
    $sql = "select * from departements where id= :id";
    try {
      $params = array(":id" => $id);
      $sth=$this->executer($sql,$params); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $departement=null;
    if($row) {
      $departement = new Departement($row);
    }
       // Retourne l'objet métier
    return $departement;
  } // function find()
  
  /**
  * Lecture de tous les départements
  * @return array
  * @throws Exception
  */
  function findAll() {
    $sql = "select * from departements";
    try {
      $sth=$this->executer($sql); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $départements = array();
    foreach ($rows as $row) {
      $departements[] = new Departement($row);
    }
    // Retourne un tableau d'objets "département"
    return $departements;
  } // function findAll()
  
  /**
  * Lecture de tous les départements d'un ID région
  * @param int $id_region
  * @return \Departement
  * @throws Exception
  */
  function findAllByIdRegion($id_region) {
    $sql = "select * from departements where id_region = :id_region";
    try {
      $params = array(":id_region" => $id_region);
      $sth=$this->executer($sql,$params);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $departements = array();
    foreach ($rows as $row) {
      $departements[] = new Departement($row);
    }
    // Retourne un tableau d'objets
    return $departements;
  } //findAllByIdRegion()

  function updateIdRegion($id_departement, $id_region) {
    $sql = "UPDATE departements SET id_region = '$id_region' WHERE id = '$id_departement'";
    try {
      $sth=$this->executer($sql);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $sth->rowCount();
  } //findAllByIdRegion()

} // Class DepartementDAO