/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java52;

/**
 *
 * @author MA500484
 */
public class Film {

    // Propriétés
    
    private String titre;
    private String realisateur;
    private String annee;

    // Constructeur sans paramètre
    
    Film() {
        this.titre = "???";
        this.realisateur = "???";
        this.annee = "???";
    }

    // Constructeur avec paramètres
    
    Film(String titre, String realisateur, String annee) {
        this.titre = titre;
        this.realisateur = realisateur;
        this.annee = annee;
    }

    // Getter
    
    public String get_titre() {
        return titre;
    }

    public String get_realisateur() {
        return realisateur;
    }

    public String get_annee() {
        return annee;
    }

    //Setter  
    
    public void set_titre(String ptitre) {
        titre = ptitre;
    }

    public void set_realisateur(String realisateur) {
        this.realisateur = realisateur;
    }
    
    public void set_annee(String annee) {
        this.annee = annee;
    }

// Retourne le libellé complet du film
    public String get_libelle() {
        return this.titre + " de " + this.realisateur + " ("+ this.annee + ")";
    }
    
// Affiche les propriétés de l'objet
    public void afficher() {
        System.out.println("------------------ Contenu ------------------");
        System.out.println(" Titre       : " + this.titre);
        System.out.println(" Réalisateur : " + this.realisateur);
        System.out.println(" Année       : " + this.annee);
    }
}  // Class Film