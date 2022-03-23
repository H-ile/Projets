<?php



/**
 * Classe fortuneDAO
 *
 * @author jef
 */

class fortuneDAO extends DAO
{

  /**
   * Constructeur
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Lecture d'un fortune par son ID
   * @param int ID du fortune
   * @return \fortune
   */
  public function find($id)
  {
    $sql = "select * from fortune where id_fortune =:id_fortune";
    try {
      $params = array(":id_fortune" => $id);
      $sth = $this->executer($sql, $params);
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $fortune = null;
    if ($row) {
      $fortune= new Fortune($row);
    }
    // Retourne l'objet métier
    return $fortune;
  } // function find()


    /**
   * Lecture d'un fortune sur un critère de recherce
   * @param int ID du fortune
   * @return \fortune
   */
  public function findByCritere($critere)
  {
    $sql = "SELECT * FROM fortune";
    $sql .=" WHERE nom like :critere or seige like :critere or pays like :critere or ca like :critere or benefice like :critere or nb_employer like :critere or branche like :critere or directeur like :critere or evolution like :critere";
    $sql .= " ORDER by id_fortune";
    try {
      $params = array(":critere" => "%".$critere."%");
      $sth = $this->executer($sql, $params);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $les_fortunes = array();
    foreach ($rows as $row) {
      $les_fortunes[] = new Fortune($row);
    }
    // Retourne un tableau d'objets "film"
    return $les_fortunes;
  } // function find()

  /**
   * Lecture de tous les films
   * @return array
   */
  public function findAll()
  {
    $sql = "select * from fortune order by id_fortune";
    try {
      $sth = $this->executer($sql);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $les_fortunes = array();
    foreach ($rows as $row) {
      $les_fortunes[] = new Fortune($row);
    }
    // Retourne un tableau d'objets "film"
    return $les_fortunes;
  } // function findAll()

  /**
   * Ajout d'un film
   * @param \fortune
   * @return int Nombre de mises à jour
   */
  public function insert(Fortune $fortune)
  {
    $sql = "INSERT INTO fortune(rang,nom,siege,pays,ca,benefice,nb_employes,branche,directeur,evolution) values (:rang,:nom,:siege,:pays,:ca,:benefice,:nb_employes,:branche,;directeur,:evolution)";
    $params = array(
      ":rang" => $fortune->get_rang(),
      ":nom" => $fortune->get_nom(),
      ":siege" => $fortune->get_siegesocial(),
      ":pays" => $fortune->get_pays(),
      ":ca" => $fortune->get_chiffre(),
      ":benefice" => $fortune->get_benef(),
      ":nb_employes" => $fortune->get_employes(),
      ":branche" => $fortune->get_branche(),
      ":directeur" => $fortune->get_ceo(),
      ":evolution" => $fortune->get_evolution()
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
   * Modification d'un film
   * @param \fortune
   * @return int Nombre de mises à jour
   */
  public function update(Fortune $fortune)
  {
    $sql = "update fortune set rang=:rang,nom=:nom,siege=:siege,pays=:pays,ca=:ca,benefice=:benefice,nb_employes=:nb_employes,branche=:branche,directeur=:diecteur,evolution=:evolution where id_fortune= :id_fortune";
    $params = array(
      ":id_fortune" => $fortune->get_id(),
      ":rang" => $fortune->get_rang(),
      ":nom" => $fortune->get_nom(),
      ":siege" => $fortune->get_siegesocial(),
      ":pays" => $fortune->get_pays(),
      ":ca" => $fortune->get_chiffre(),
      ":benefice" => $fortune->get_benef(),
      ":nb_employes" => $fortune->get_employes(),
      ":branche" => $fortune->get_branche(),
      ":directeur" => $fortune->get_ceo(),
      ":evolution" => $fortune->get_evolution(),
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
   * Suppression d'un film
   * @param int ID du film
   * @return int Nombre de mises à jour
   */
  public function delete($id)
  {
    $sql = "delete from fortune where id_fortune= :id_fortune";
    $params = array(
      ":id" => $id
    );
    try {
      $sth = $this->executer($sql, $params); // On passe par la méthode de la classe mère
      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $nb;  // Retourne le nombre de mise à jour
  }
} // class filmDAO