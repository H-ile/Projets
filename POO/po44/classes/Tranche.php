<?php

/**
 * Classe métier Tranche
 *
 * @author jef
 */
class Tranche
{

  // Propriétés
  private $id;
  private $libelle;
  private $qf_mini;
  private $qf_maxi;
  private $prix_individuel;
  private $prix_collectif;

  /**
   * Constructeur avec paramètres
   *
   * @param array $tableau
   */
  public function __construct($id, $libelle, $qf_mini, $qf_maxi, $prix_individuel, $prix_collectif)
  {
    $this->id = $id;
    $this->libelle = $libelle;
    $this->qf_mini = $qf_mini;
    $this->qf_maxi = $qf_maxi;
    $this->prix_individuel = $prix_individuel;
    $this->prix_collectif = $prix_collectif;
  }

  // Getter et setter
  function get_id()
  {
    return $this->id;
  }

  function get_libelle()
  {
    return $this->libelle;
  }

  function get_qf_mini()
  {
    return $this->qf_mini;
  }

  function get_qf_maxi()
  {
    return $this->qf_maxi;
  }

  function get_prix_individuel()
  {
    return $this->prix_individuel;
  }

  function get_prix_collectif()
  {
    return $this->prix_collectif;
  }

  function set_id($id): void
  {
    $this->id = $id;
  }

  function set_libelle($libelle): void
  {
    $this->libelle = $libelle;
  }

  function set_qf_mini($qf_mini): void
  {
    $this->qf_mini = $qf_mini;
  }

  function set_qf_maxi($qf_maxi): void
  {
    $this->qf_maxi = $qf_maxi;
  }

  function set_prix_individuel($prix_individuel): void
  {
    $this->prix_individuel = $prix_individuel;
  }

  function set_prix_collectif($prix_collectif): void
  {
    $this->prix_collectif = $prix_collectif;
  }

  // Retourne le libellé du QF
  // NOTA : utiliser l'égalité stricte "===" sinon le zéro est considéré comme null
  public function lib_qf()
  {
    if ($this->get_qf_maxi() !== NULL && $this->get_qf_mini() !== NULL) {
      return "de " . $this->get_qf_mini() . " à " . $this->get_qf_maxi();
    }
    if ($this->get_qf_maxi() === NULL && $this->get_qf_mini() !== NULL) {
      return $this->get_qf_mini() . " et supérieur";
    }
    if ($this->get_qf_maxi() === NULL && $this->get_qf_mini() === NULL) {
      return "";
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
   * Affiche le contenu de l'objet
   *
   * @return void
   */
  public function afficher()
  {
    $props = $this->dump();
    $html = '<ul>';
    foreach ($props as $key => $value) {
      $html .= '<li>' . $key . ' : ' . $value . '</li>';
    }
    $html .= '</ul>';
    return $html;
  }
}

// Classe Tranche