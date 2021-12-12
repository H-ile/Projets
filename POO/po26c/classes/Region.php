<?php

/**
 * Classe Region
 *
 * @author gus
 */
class Region
{

  // Attributs
    private $id;
    private $libelle;
    private $est_outremer;  // booléen, région d'outre-mer
    private $departements=array();  // Collection de la classe "Departement"

    // Constructeur
    public function __construct(array $tableau = null)
    {
        if ($tableau != null) {
            $this->fill($tableau);
        }
    }

    // Getter et setter
    public function get_id()
    {
        return $this->id;
    }

    public function get_libelle()
    {
        return $this->libelle;
    }

    public function get_est_outremer()
    {
        return $this->est_outremer;  // bool
    }

    public function get_lib_est_outremer()
    {
      if ($this->est_outremer) {
        return "oui";  
      } else {
        return "non";
      }
    }

    public function get_departements()
    {
        return $this->departements;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_libelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function set_est_outremer(bool $est_outremer)
    {
        $this->est_outremer = $est_outremer;
    }

    public function set_departements(array $departements)
    {
        $this->departements = $departements;
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
        $html = '<ul>';
        $html .= '<li>id=' . $this->get_id() . '</li>';
        $html .= '<li>libelle=' . $this->get_libelle() . '</li>';
        $html .= '<li>est outre-mer=' . $this->get_lib_est_outremer() . '</li>';
        $html .= '<li>nb departement(s)=' . count($this->departements) . '</li>';
        $html .= '<ul>';
        return $html;
    }
}

// Classe Region
