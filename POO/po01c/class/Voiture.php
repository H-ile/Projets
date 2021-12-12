<?php

/**
 * Classe Voiture
 *
 * @author jef
 */
class Voiture {

    var $marque = "???";
    var $modele = "???";
    var $nom = "???";
    var $compteur = 0;
    var $aDemarre = false;

    // Constructeur
    public function __construct($nom) {
        $this->marque = "???";
        $this->modele = "???";
        $this->nom = $nom;
        $this->compteur = 0;
        $this->aDemarre = false;
    }

    // Démarrer
    function demarrer() {
        $this->aDemarre = true;
        echo "<p>demarrer : la voiture a démarré</p>";
    }

    // Avancer de X km
    function avancer($km) {
        if ($this->aDemarre) {
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
        echo "<li>a démarré ? : " . $this->aDemarre . "</li>";  // Affiche 1 si true et rien si false
        echo "</ul>";
    }

}

// Classe Voiture
