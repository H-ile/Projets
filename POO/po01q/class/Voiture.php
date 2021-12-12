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
    echo "<p>--- Description de " . $this->get_nom() . " ---</p>";
    echo "<ul>";
    echo "<li>Marque      : " . $this->get_marque() . "</li>";
    echo "<li>Modèle      : " . $this->get_modele() . "</li>";
    echo "<li>Nom         : " . $this->get_nom() . "</li>";
    echo "<li>Compteur    : " . $this->get_compteur() . "</li>";
    echo "<li>a démarré ? : " . $this->get_lib_etat() . "</li>";
    echo "<li>Type        : " . $this->get_type() . "</li>";
    echo "</ul>";
  }
 
}

// Classe Voiture
