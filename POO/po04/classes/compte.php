<?php
class compte
{
    private $devise = '€';
    private $solde;
    private $titulaire;

    function commande($message)
    {
        echo '<p class="commande">Commande : ' . $message . '</p>' . PHP_EOL;
    }
    function reponse($message)
    {
        echo '<p class="reponse">Reponse : ' . $message . '</p>' . PHP_EOL;
    }
    function erreur($message)
    {
        echo '<p class="erreur">Erreur : ' . $message . '</p>' . PHP_EOL;
    }
    function __construct($titulaire, $solde, $devise = "€")
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devide = $devise;
    }
    function __destruct()
    {
        echo "<p class='reponse'>Reponse: adieu je coule ! </p>";
    }
    function get_devise()
    {
        return $this->devise;
    }

    function get_solde()
    {
        return $this->solde;
    }

    function get_titulaire()
    {
        return $this->titulaire;
    }
    function set_devise($devise)
    {
        if ($devise == "$" || $devise == "€") {
            $this->devise = $devise;
        } else {

            $this->erreur($message = "devise differente de € ou $ : " . $devise);
        }
    }
    function set_solde($solde)
    {
        if ($solde >= 0) {
            $this->solde = $solde;
        } else {

            $this->erreur($message = "solde inferieur a 0 : " . $solde);
        }
    }
    function get_lib_solde()
    {
        return $this->solde . " " . $this->devise;
    }
    function crediter($montant)
    {
        $this->solde = $this->solde + ABS($montant);
        $this->commande($message = "crediter " . ABS($montant));
    }

    function debiter($montant)
    {

        $this->commande($message = "debiter " . ABS($montant));
        $this->set_solde($this->solde - ABS($montant));
    }

    function afficher()
    {
        $this->commande($message = "créer le compte de " . $this->titulaire);
        $this->reponse($message = "salut ,je suis le compte de " . $this->titulaire);
        $this->commande($message = "parametètres du compte de " . $this->titulaire);
        echo "<ul>";
        echo "<li>" . $this->get_devise();
        echo "<li>" . $this->get_lib_solde();
        echo "<li>" . $this->get_titulaire();
        echo "</ul>";
    }
}
