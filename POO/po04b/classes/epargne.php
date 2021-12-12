<?php
class epargne extends compte
{

    private $taux_int = "0";



    function __construct($titulaire, $solde, $devise)
    {
        $this->taux_int = "0";
        parent::__construct($titulaire, $solde, $devise);
    }



    function get_taux_int()
    {

        return $this->taux_int;
    }

    function set_taux_int($taux_int)
    {
        if ($taux_int >= 0) {
            $this->taux_int = $taux_int;
        } else {

            $this->erreur($message = "taux inferieur a 0 : " . $taux_int);
        }
    }


    function afficher()
    {
        compte::afficher();
        echo  "<h1>CALCUL TAUX DE : " . $this->get_taux_int() . "</h1>";
        echo "<table>";
        echo "<tr><th>Année</th><th>Rendement annuel</th></tr>";
        $solde_future = compte::get_solde();
        $taux = 1 + $this->get_taux_int() / 100;
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>" . $i . " année(s)</td><td>" . $solde_future . "</td></tr>";
            $solde_future = round($solde_future * ($taux), 2);
        }

        echo "</table>";
    }
}
