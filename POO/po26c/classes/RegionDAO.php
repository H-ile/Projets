<?php

/**
* Classe DAO RegionDAO
*
* @author gus
*/

class RegionDAO extends DAO {
  
  /**
  * Constructeur
  */
  function __construct() {
    parent::__construct();
  }
  
  /**
  * Lecture d'une région par son ID
  * @param type $id_region
  * @return \Region
  * @throws Exception
  */
  function find($id) {
    $sql = "select * from regions where id=:id";
    try {
      $params = array(":id" => $id);
      $sth=$this->executer($sql,$params); 
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $region=null;
    if ($row){
      $region = new Region($row);
      $departementDAO = new DepartementDAO();
      // Lecture des departements associées à la région
      $departements = $departementDAO->findAllByIdRegion($id);
      $region->set_departements($departements);
    }
    // Retourne l'objet métier
    return $region;
  } // function find()
  
  /**
  * Lecture de toutes les régions
  * @return array
  * @throws Exception
  */
  function findAll() {
    $sql = "select * from regions";
    try {
      $sth=$this->executer($sql); 
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $regions = array();
    $departementDAO = new DepartementDAO();
    foreach ($rows as $row) {
      // Lecture des departements associées à la région
      $departements = $departementDAO->findAllByIdRegion($row["id"]);
      $row['departements'] = $departements;
      $regions[] = new Region($row);
    }
    // Retourne un tableau d'objets
    return $regions;
  }
  
} // Classe RegionDAO