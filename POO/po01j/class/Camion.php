<?php

/**
 * Classe Camion
 *
 * @author jef
 */
class Camion extends Vehicule {

  private $chargement;

  // Constructeur
  function __construct($nom) {
    parent::__construct($nom);
    $this->chargement = 0;
  }

  // Getter/setter
  function get_chargement() {
    return $this->chargement;
  }

  function set_chargement($chargement) {
    $this->chargement = abs($chargement);
  }

  // Autres méthodes
  function charger($chargement) {
    if (($chargement) > 0) {
      $this->set_chargement($this->get_chargement() + $chargement);
      echo "<p>" . $this->get_nom() . " a chargé : " . $chargement . " kg</p>";
    } else {
      echo "<p>Erreur : " . $this->get_nom() . " ne peut pas charger : " . $chargement . " kg</p>";
    }
  }

}

// Classe Camion
