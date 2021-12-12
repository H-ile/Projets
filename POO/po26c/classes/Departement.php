<?php

/**
 * Classe Departement
 *
 * @author gus
 */
class Departement
{

  // Attributs
    private $id;
    private $libelle;
    private $id_region; // Ajouté pour permettre la mise à jour

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

    public function get_id_region()
    {
        return $this->id_region;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_libelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function set_id_region($id_region)
    {
        $this->id_region = $id_region;
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

// Classe Departement
