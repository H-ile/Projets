<?php
class depot extends compte
{
    private $chequier = "false";
    private $cartebanquaire = "false";



    function __construct($titulaire, $solde,  $devise = "€")
    { {
            parent::__construct($titulaire, $solde,  $devise = "€");
        }
        $this->chequier = "false";
        $this->cartebanquaire = "false";
    }

    function get_chequier()
    {

        return $this->chequier;
    }

    function get_cartebanquaire()
    {

        return $this->cartebanquaire;
    }

    function set_chequier($chequier)
    {

        if ($chequier == 'true') {
            $this->chequier = "oui";
        } else if ($chequier == 'false') {
            $this->chequier = "non";
        } else {

            $this->erreur($message = "ETAT DIFFERENT DE OUI OU NON POUR CHEQUIER :" . $chequier);
        }
    }
    function set_cartebanquaire($cartebanquaire)
    {

        if ($cartebanquaire == 'true') {
            $this->cartebanquaire = "oui";
        } else if ($cartebanquaire == 'false') {
            $this->cartebanquaire = "non";
        } else {

            $this->erreur($message = "ETAT DIFFERENT DE OUI OU NON POUR CARTE BANQUAIRE:" . $cartebanquaire);
        }
    }

    
    function afficher()
    {

        parent::afficher();
        echo"<ul>";
        echo "<li>Chequier : " . $this->get_chequier();
        echo "<li>Carte banquaire : " . $this->get_cartebanquaire();
        echo"</ul>";
    }
}
