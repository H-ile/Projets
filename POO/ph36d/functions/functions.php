<?php

/**
 * ph143b - Europa
 * Fonctions de l'application
 */

/**
 * Connexion à la base de données
 *
 * @return PDO l'objet de connexion pdo
 */
function db_connect()
{
  $dsn = 'mysql:host=localhost;dbname=MARVEL';  // contient le nom du serveur et de la base
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
class dao
{

  protected $pdo = null; // Objet de connexion
  /**


   * Méthode de connexion
   */
  function __construct()
  {
    // On récupère les paramètres de la base à partir des constantes de init.php
    $user = DB_USER;
    $password = DB_PASSWORD;
    $host = DB_HOST;
    $name = DB_NAME;
    // On construit le DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $name;
    // Création de la connexion
    try {
      $pdo = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>
      "SET NAMES utf8"));
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo ("<p>Erreur lors de la connexion : " . $e->getMessage() . '<p>');
    }
    $this->pdo = $pdo;
  }
}


class paysDAO extends dao
{

  function __construct()
  {
    parent::__construct();
  }
  function find($id_pays)
  {
    $sql = "select * from pays where id_pays= :id_pays";
    try {
      $sth = $this->pdo->prepare($sql);
      $sth->execute(array(":id_pays" => $id_pays));
      $row = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $pays = null;
    if ($row) {
      $pays = new pays($row);
    }
    // Retourne l'objet métier
    return $pays;
  } // function find()

  function findAll()
  {
    $sql = "select * from pays";
    try {
      $sth = $this->pdo->prepare($sql);
      $sth->execute();
      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $payss = array();
    foreach ($rows as $row) {
      $payss[] = new pays($row);
    }
    // Retourne un tableau d'objets "salarié"
    return $payss;
  } // function findAll()

  function findAllByIdService($id_pays)
  {
    $sql = "select * from pays where id_pays = :id_pays";
    try {
      $sth = $this->pdo->prepare($sql);
      $sth->execute(array(":id_pays" => $id_pays));


      $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    $payss = array();
    foreach ($rows as $row) {
      $payss[] = new pays($row);
    }
    // Retourne un tableau d'objets
    return $payss;
  } //findAllByIdService()


  public function fill(array $tableau)
  {
    foreach ($tableau as $cle => $valeur) {
      $methode = 'set_' . $cle;
      if (method_exists($this, $methode)) {
        $this->$methode($valeur);
      }
    }
  }
  protected function executer($sql, $params = null)
  {
    try {
      if ($params == null) {
        $sth = $this->pdo->query($sql); // exécution directe
      } else {
        $sth = $this->pdo->prepare($sql); // requête préparée
        $sth->execute($params);
      }
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage() . "\nSQL : " . $sql);
    }
    return $sth; // Renvoie le handler du résultat de la requête SQL
  }
  public function insert(pays $pays)
  {
    $sql = "insert into pays (matricule,nom,prenom,id_service) values
    (:matricule,:nom,:prenom,:id_service)";
    $params = array(


      ":matricule" => $pays->get_matricule(),
      ":nom" => $pays->get_nom(),
      ":prenom" => $pays->get_prenom(),
      ":id_service" => $pays->get_id_service()
    );
    try {
      $sth = $this->executer($sql, $params);
      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $nb; // Retourne le nombre de mise à jour
  } // insert()




  public function update(Pays $pays)
  {
    $sql = "update pays set matricule=:matricule,nom=:nom,prenom=:prenom,id_service=:id_service where id=:id";
    $params = array(
      ":id" => $pays->get_id(),
      ":matricule" => $pays->get_matricule(),
      ":nom" => $pays->get_nom(),
      ":prenom" => $pays->get_prenom(),
      ":id_service" => $pays->get_id_service()
    );
    try {
      $sth = $this->executer($sql, $params);
      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $nb; // Retourne le nombre de mise à jour
  } // update()



  public function delete($id)
  {
    $sql = "delete from pays where id=:id";
    $params = array(
      ":id" => $id
    );
    try {
      $sth = $this->executer($sql, $params);
      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $nb; // Retourne le nombre de mise à jour
  } // delete()



  function deleteAllByService($id_service)
  {
    $sql = "delete from pays where id_service=:id_service";
    $params = array(
      ":id_service" => $id_service
    );
    try {
      $sth = $this->executer($sql, $params); // On passe par la méthode de la




      $nb = $sth->rowcount();
    } catch (PDOException $e) {
      throw new Exception("Erreur lors de la requête SQL : " . $e->getMessage());
    }
    return $nb; // Retourne le nombre de mise à jour
  } // deleteAllByService()
}
