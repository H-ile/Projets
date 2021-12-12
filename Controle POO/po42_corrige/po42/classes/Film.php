<?php


class Film
{

  // Attributs
  private $id_film;
  private $title;
  private $phase;
  private $us_release_date;
  private $directors;
  private $screenwriters;
  private $producers;
  private $status;

  /**
   * Constructeur
   *
   * @param array|null $tableau
   */
  function __construct(array $tableau = null)
  {
    if ($tableau != null) {
      $this->fill($tableau);
    }
  } // function __construct(

  // Getters
  function get_id_film() {
      return $this->id_film;
  }

  function get_title() {
      return $this->title;
  }

  function get_phase() {
      return $this->phase;
  }

  function get_us_release_date() {
      return $this->us_release_date;
  }

  function get_directors() {
      return $this->directors;
  }

  function get_screenwriters() {
      return $this->screenwriters;
  }

  function get_producers() {
      return $this->producers;
  }

  function get_status() {
      return $this->status;
  }

   
  // Setters
  function set_id_film($id_film): void {
      $this->id_film = $id_film;
  }

  function set_title($title): void {
      $this->title = $title;
  }

  function set_phase($phase): void {
      $this->phase = $phase;
  }

  function set_us_release_date($us_release_date): void {
      $this->us_release_date = $us_release_date;
  }

  function set_directors($directors): void {
      $this->directors = $directors;
  }

  function set_screenwriters($screenwriters): void {
      $this->screenwriters = $screenwriters;
  }

  function set_producers($producers): void {
      $this->producers = $producers;
  }

  function set_status($status): void {
      $this->status = $status;
  }

  /**
   * Hydrateur
   * Alimente les propriétés à partir d'un tableau
   * @param array $tableau
   */
  public function fill(array $tableau)
  {
    foreach ($tableau as $cle => $valeur) {
      $methode = 'set_' . $cle;
      if (method_exists($this, $methode)) {
        $this->$methode($valeur);
      }
    }
  }

  /**
   * Retourne un tableau du contenu de l'objet
   *
   * @return array
   */
  public function dump()
  {
    return get_object_vars($this);
  }

  /**
   * Affiche la liste des propriétés de l'objet courant
   *
   * @return string les propriétés sous la forme d'une liste à puce HTML
   */
  public function afficher()
  {
    $tableau = $this->dump();
    $html = '<ul>';
    foreach ($tableau as $cle => $valeur) {
      $html .= '<li>' . $cle . ' = ' . $valeur . '</li>';
    }
    $html .= '</ul>';
    return $html;
  }
} // class Film