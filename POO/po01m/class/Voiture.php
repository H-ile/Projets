<?php

/**
 * Classe Voiture
 *
 * @author jef
 */
class Voiture extends Vehicule {

  // Constructeur
  function __construct($nom) {
    parent::__construct($nom);
    $this->set_type("Voiture");
  }
  
  // Autres méthodes
  function afficher() {
    parent::afficher();
    echo "</ul>";
  }
 
}

// Classe Voiture
