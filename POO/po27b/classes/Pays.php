<?php

/**
 * Classe Pays
 *
 * @author jef
 */
class Pays
{

  // Attributs
    private $id_pays;
    private $code;
    private $alpha2; 
    private $alpha3;
    private $nom_en; 
    private $nom_fr; 

    // Constructeur

    public function __construct(array $tableau = null)
    {
        if ($tableau != null) {
            $this->fill($tableau);
        }
    }

    // Getter et setter
    function get_id_pays() {
      return $this->id_pays;
    }

    function get_code() {
      return $this->code;
    }

    function get_alpha2() {
      return $this->alpha2;
    }

    function get_alpha3() {
      return $this->alpha3;
    }

    function get_nom_en() {
      return $this->nom_en;
    }

    function get_nom_fr() {
      return $this->nom_fr;
    }

    function set_id_pays($id_pays) {
      $this->id_pays = $id_pays;
    }

    function set_code($code) {
      $this->code = $code;
    }

    function set_alpha2($alpha2) {
      $this->alpha2 = $alpha2;
    }

    function set_alpha3($alpha3) {
      $this->alpha3 = $alpha3;
    }

    function set_nom_en($nom_en) {
      $this->nom_en = $nom_en;
    }

    function set_nom_fr($nom_fr) {
      $this->nom_fr = $nom_fr;
    }

    
    /**
     * Hydrateur
     * Alimente les propriétés à partir d'un tableau
     * @param array $tableau
     */
    public function fill(array $tableau)
    {
        foreach ($tableau as $cle => $valeur) {
            $methode = 'set_' . $cle;
            if (method_exists($this, $methode)) {
                $this->$methode($valeur);
            }
        }
    }

    /**
     * Retourne un tableau du contenu de l'objet
     *
     * @return array
     */
    public function dump()
    {
        return get_object_vars($this);
    }

    /**
     * Affiche la liste des propriétés de l'objet courant
     *
     * @return string les propriétés sous la forme d'une liste à puce HTML
     */
    public function afficher()
    {
        $tableau = $this->dump();
        $html = '<ul>';
        foreach ($tableau as $cle=>$valeur) {
            $html .= '<li>' . $cle . ' = '.$valeur. '</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}

// Classe Pays
