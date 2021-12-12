<?php 
Class Tortue{
    var $id;
    var $nom;
    var $surnom;
    var $couleur;

    public function __construct($id) {
        $this->id = "???";
        $this->nom = "???";
        $this->surnom = ;
        $this->couleur = 'rouge'.'blue'.'orange'.'violet' ;
    }

    function nom_complet(){
        $this->nom = $nom;
        $this->surnom = $surnom;
    }


    function afficher() {
        echo "<ul>";
        echo "<li>id      : " . $this->id . "</li>";
        echo "<li>Nom      : " . $this->nom . "</li>";
        echo "<li>Surnom         : " . $this->surnom . "</li>";
        echo "<li>Couleur    : " . $this->couleur . "</li>";
        echo "</ul>";
    }

}









?>