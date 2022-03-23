<?php

/**
 * Classe filmDAO
 *
 * @author jef
 */

class filmDAO extends DAO
{

  /**
   * Constructeur
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Lecture d'un film par son ID
   * @param int ID du film
   * @return \film
   */
  public function find($id_film)
  {
    $sql = "select * from film where id_film= :id_film";
    try {
      $params = array(":id_film" => $id_film);
      $sth = $this->executer($sql, $params);
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $film = null;
    if ($row) {
      $film = new Film($row);
    }
    // Retourne l'objet métier
    return $film;
  } // function find()


    /**
   * Lecture d'un film sur un critère de recherce
   * @param int ID du film
   * @return \film
   */
  public function findByCritere($critere)
  {
    $sql = "SELECT * FROM film";
    $sql .=" WHERE title like :critere or directors like :critere or screenwriters like :critere or producers like :critere or status like :critere";
    $sql .= " ORDER by id_film";
    try {
      $params = array(":critere" => "%".$critere."%");
      $sth = $this->executer($sql, $params);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    $les_films = array();
    foreach ($rows as $row) {
      $les_films[] = new film($row);
    }
    // Retourne un tableau d'objets "film"
    return $les_films;
  } // function find()

  /**
   * Lecture de tous les films
   * @return array
   */
  public function findAll()
  {
    $sql = "select * from film order by id_film";
    try {
      $sth = $this->executer($sql);
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      die("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $les_films = array();
    foreach ($rows as $row) {
      $les_films[] = new film($row);
    }
    // Retourne un tableau d'objets "film"
    return $les_films;
  } // function findAll()

  /**
   * Ajout d'un film
   * @param \film
   * @return int Nombre de mises à jour
   */
  public function insert(Film $film)
  {
    $sql = "INSERT INTO film(title,phase,us_release_date,directors,screenwriters,producers,status) values (:title,:phase,:us_release_date,:directors,:screenwriters,:producers,:status)";
    $params = array(
      ":title" => $film->get_title(),
      ":phase" => $film->get_phase(),
      ":us_release_date" => $film->get_us_release_date(),
      ":directors" => $film->get_directors(),
      ":screenwriters" => $film->get_screenwriters(),
      ":producers" => $film->get_producers(),
      ":status" => $film->get_status()
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
   * @param \film
   * @return int Nombre de mises à jour
   */
  public function update(Film $film)
  {
    $sql = "update film set title=:title,phase=:phase,us_release_date=:us_release_date,directors=:directors,screenwriters=:screenwriters,producers=:producers,status=:status where id_film=:id_film";
    $params = array(
      ":id_film" => $film->get_id_film(),
      ":title" => $film->get_title(),
      ":phase" => $film->get_phase(),
      ":us_release_date" => $film->get_us_release_date(),
      ":directors" => $film->get_directors(),
      ":screenwriters" => $film->get_screenwriters(),
      ":producers" => $film->get_producers(),
      ":status" => $film->get_status()
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
  public function delete($id_film)
  {
    $sql = "delete from film where id_film= :id_film";
    $params = array(
      ":id_film" => $id_film
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