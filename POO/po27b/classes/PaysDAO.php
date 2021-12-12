<?php
/**
* Classe DAO PaysDAO
*
* @author jef
*/

class PaysDAO extends DAO
{
  
  /**
  * Constructeur
  */
    public function __construct()
    {
        parent::__construct();
    }
  
    /**
    * Lecture d'un pays par son ID
    * @param int ID du pays
    * @return \Pays
    */
    public function find($id)
    {
        $sql = "select * from pays where id_pays= :id_pays";
        try {
            $params = array(":id_pays" => $id);
            $sth=$this->executer($sql, $params);
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        $pays=null;
        if ($row) {
            $pays = new Pays($row);
        }
        // Retourne l'objet métier
        return $pays;
    } // function find()
  
    /**
    * Lecture de tous les pays
    * @return array
    */
    public function findAll()
    {
        $sql = "select * from pays";
        try {
            $sth=$this->executer($sql);
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        $les_pays = array();
        foreach ($rows as $row) {
            $les_pays[] = new Pays($row);
        }
        // Retourne un tableau d'objets "pays"
        return $les_pays;
    } // function findAll()
 
    /**
    * Ajout d'un pays
    * @param \pays
    * @return int Nombre de mises à jour
    */
    public function insert(pays $pays)
    {
        $sql = "INSERT INTO pays(code, alpha2, alpha3, nom_en, nom_fr) values (:code, :alpha2, :alpha3, :nom_en, :nom_fr)";
        $params = array(
          ":code" => $pays->get_code(),
          ":alpha2" => $pays->get_alpha2(),
          ":alpha3" => $pays->get_alpha3(),
          ":nom_en" => $pays->get_nom_en(),
          ":nom_fr" => $pays->get_nom_fr()
        );
        try {
            $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
            $nb = $sth->rowcount();
        } catch (PDOException $e) {
            die("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        return $nb;  // Retourne le nombre de mise à jour
    } // insert()

  /**
  * Modification d'un pays
  * @param \pays
  * @return int Nombre de mises à jour
  */
    public function update(pays $pays)
    {
        $sql = "update pays set code=:code,alpha2=:alpha2,alpha3=:alpha3,nom_en=:nom_en,nom_fr=:nom_fr where id_pays= :id_pays";
        $params = array(
          ":id_pays" => $pays->get_id_pays(),
          ":code" => $pays->get_code(),
          ":alpha2" => $pays->get_alpha2(),
          ":alpha3" => $pays->get_alpha3(),
          ":nom_en" => $pays->get_nom_en(),
          ":nom_fr" => $pays->get_nom_fr()
        );
        try {
            $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
            $nb = $sth->rowcount();
        } catch (PDOException $e) {
            die("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        return $nb;  // Retourne le nombre de mise à jour
    } // update()

  /**
  * Suppression d'un pays
  * @param int ID du pays
  * @return int Nombre de mises à jour
  */
    public function delete($id)
    {
        $sql = "delete from pays where id_pays= :id_pays";
        $params = array(
        ":id_pays" => $id
        );
        try {
            $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
            $nb = $sth->rowcount();
        } catch (PDOException $e) {
            die("Erreur lors de la requête SQL : " . $e->getMessage());
        }
        return $nb;  // Retourne le nombre de mise à jour
    }
} // Class PaysDAO
