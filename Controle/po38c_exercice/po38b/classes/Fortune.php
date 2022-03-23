<?php


class Fortune
{

  // Attributs
  private $id;
  private $rang;
  private $nom;
  private $siegesocial;
  private $pays;
  private $chiffre;
  private $benef;
  private $employes;
  private $branche;
  private $ceo;
  private $evolution;

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
  function get_id() {
    return $this->id;
}
  function get_rang() {
      return $this->rang;
  }

  function get_nom() {
      return $this->nom;
  }

  function get_siegesocial() {
      return $this->siegesocial;
  }

  function get_pays() {
      return $this->pays;
  }

  function get_chiffre() {
      return $this->chiffre;
  }

  function get_benef() {
      return $this->benef;
  }

  function get_employes() {
      return $this->employes;
  }

  function get_branche() {
      return $this->branche;
  }
  
  function get_ceo() {
    return $this->ceo;
    }
    function get_evolution() {
    return $this->evolution;
    }

   
  // Setters
  function set_id($id): void {
    $this->id = $id;
  }

  function set_rang($rang): void {
      $this->rang = $rang;
  }

  function set_nom($nom): void {
      $this->nom = $nom;
  }

  function set_seigessociale($seigessociale): void {
      $this->seigessociale = $seigessociale;
  }

  function set_pays($pays): void {
      $this->pays = $pays;
  }

  function set_chiffre($chiffre): void {
      $this->chiffre = $chiffre;
  }

  function set_benef($benef): void {
      $this->benef = $benef;
  }
  
  function set_employes($employes): void {
    $this->employes = $employes;
  }


  function set_branche($branche): void {
      $this->branche = $branche;
  }

  function set_ceo($ceo): void {
      $this->ceo = $ceo;
  }
  function set_evolution($evolution): void {
    $this->evolution = $evolution;
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