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
    $this->set_chargement(0);
    $this->set_type("Camion");
  }

  // Getter/setter
  function get_chargement() {
    return $this->chargement;
  }

  function get_lib_chargement() {
    return $this->chargement . " kg";
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

  function afficher() {
    echo "<p>--- Description de " . $this->get_nom() . " ---</p>";
    echo "<ul>";
    echo "<li>Marque      : " . $this->get_marque() . "</li>";
    echo "<li>Modèle      : " . $this->get_modele() . "</li>";
    echo "<li>Nom         : " . $this->get_nom() . "</li>";
    echo "<li>Compteur    : " . $this->get_compteur() . "</li>";
    echo "<li>a démarré ? : " . $this->get_lib_etat() . "</li>";
    echo "<li>Type        : " . $this->get_type() . "</li>";
    echo "<li>chargement : " . $this->get_lib_chargement() . "</li>";
    echo "</ul>";
  }

}

// Classe Camion