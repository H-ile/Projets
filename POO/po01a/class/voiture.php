
<?php
class voiture
{
    var $marque;
    var $modele;
    var $nom;
    var $compteur = 0;
    var $demarre = false;

    function demarrer()
    {
        $this->demarre = true;
        echo "<p>la voiture a demarré !</p>";
    }
    function avancer($km)
    {
        if ($this->demarre == true) {
            $this->compteur = $this->compteur + $km;
            echo "<p>la voiture a parcouru " . $km . " km </p>";
        } else {
            echo "<p>il faut demarrer la voiture avant !</p>";
        }
    }
    function arreter()
    {
        $this->demarre = false;
        echo "<p>la voiture c'est arréter </p>";
    }
    function afficher()
    {
        if ($this->demarre) {
            $lib = "oui";
        } else {
            $lib = "non";
        }
        echo "<ul>";
        echo "<li>Marque : " . $this->marque . "</li>";
        echo "<li>Modele : " . $this->modele . "</li>";
        echo "<li>Nom : " . $this->nom . "</li>";
        echo "<li>compteur : " . $this->compteur . "</li>";
        echo "<li>A demarrer : " . $lib . "</li>";
        echo "</ul>";
    }
}
