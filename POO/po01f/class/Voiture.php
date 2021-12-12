<?php

/**
 * Classe Voiture
 *
 * @author jef
 */
class Voiture {

  private $marque = "???";
  private $modele = "???";
  private $nom = "???";
  private $compteur = 0;
  private $aDemarre = false;

  // Constructeur
  public function __construct($nom) {
    $this->set_marque("Renault");
    $this->modele = "???";
    $this->nom = $nom;
    $this->compteur = 0;
    $this->aDemarre = false;
  }

  // Destructeur
  public function __destruct() {
    echo "<p>destruct : adieu monde injuste ! </p>";
  }

  // Getter et setter

  function get_marque() {
    return $this->marque;
  }

  function set_marque($marque) {
    if ($marque == "Renault" || $marque == "Dacia") {
      $this->marque = $marque;
    } else {
      echo "<p>Erreur : la marque doit être Renault ou Dacia : " . $marque . "</p>";
    }
  }

  function get_modele() {
    return $this->modele;
  }

  function set_modele($modele) {
    $this->modele = $modele;
  }

  function get_nom() {
    return $this->nom;
  }

  function set_nom($nom) {
    $this->nom = $nom;
  }

    
  function get_compteur() {
    return $this->compteur;
  }

  function set_compteur($compteur) {
    $this->compteur = $compteur;
  }

  function get_aDemarre() {
    return $this->aDemarre;
  }
  
  function get_lib_aDemarre() {
    if ($this->aDemarre) {
      return "Oui";
    } else {
      return "Non";
    }
  }

  function set_aDemarre($aDemarre) {
    $this->aDemarre = $aDemarre;
  }

  // Démarrer
  function demarrer() {
    $this->aDemarre = true;
    echo "<p>demarrer : la voiture a démarré</p>";
  }

  // Avancer de X km
  function avancer($km) {
    if ($this->aDemarre) {
      $km = abs($km);
      $this->compteur = $this->compteur + $km;
      echo "<p>avancer : la voiture a avancé de " . $km . " km(s)</p>";
    } else {
      echo "<p>Erreur : la voiture doit démarrer avant de pouvoir avancer !</p>";
    }
  }

  // Arréter
  function arreter() {
    $this->aDemarre = false;
    echo "<p>arreter : la voiture est arrétée</p>";
  }

  // Afficher
  function afficher() {
    echo "<p>--- Description de " . $this->nom . " ---</p>";
    echo "<ul>";
    echo "<li>Marque      : " . $this->marque . "</li>";
    echo "<li>Modèle      : " . $this->modele . "</li>";
    echo "<li>Nom         : " . $this->nom . "</li>";
    echo "<li>Compteur    : " . $this->compteur . "</li>";
    echo "<li>a démarré ? : " . $this->get_lib_aDemarre() . "</li>";  
    echo "</ul>";
  }

}

// Classe Voiture
