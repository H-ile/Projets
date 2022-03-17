/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Java52b;

import java.util.ArrayList;

/**
 *
 * @author ramiarj
 */
public class Film {

    // Propriétés
    private String titre;
    private String realisateur;
    private String annee;
    private ArrayList acteurs;  // Les principaux acteurs.trices du film

    // Constructeur sans paramètre
    Film() {
        this.titre = "???";
        this.realisateur = "???";
        this.annee = "???";
        acteurs = new ArrayList<Acteur>();
    }

    // Constructeur avec paramètres
    Film(String titre, String realisateur, String annee) {
        this.titre = titre;
        this.realisateur = realisateur;
        this.annee = annee;
        acteurs = new ArrayList<Acteur>();
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

    public ArrayList<Acteur> get_acteurs() {
        return acteurs;
    }

    //Setter  
    public void set_titre(String titre) {
        this.titre = titre;
    }

    public void set_realisateur(String realisateur) {
        this.realisateur = realisateur;
    }

    public void set_annee(String annee) {
        this.annee = annee;
    }

    public void set_acteurs(ArrayList<Acteur> acteurs) {
        this.acteurs = acteurs;
    }
    
    // Ajoute un acteur à la collection des acteurs
    
    public void add_acteur(Acteur acteur){
        this.acteurs.add(acteur);
    }

    // Retourne le libellé complet du film
    public String get_libelle() {
        return this.titre + " de " + this.realisateur + " (" + this.annee + ")";
    }

    // Affiche les propriétés de l'objet
    public void afficher() {
        System.out.println("------------------ Contenu ------------------");
        System.out.println(" Titre       : " + this.titre);
        System.out.println(" Réalisateur : " + this.realisateur);
        System.out.println(" Année       : " + this.annee);
        System.out.println(" Acteur(s)   : ");

        if (acteurs.size() > 0) {
            for (Acteur unActeur : this.get_acteurs()) {
                System.out.println("   * "+ unActeur.get_nom_complet());
            }
        } else {
            System.out.println("  - Aucun - ");
        }

    }
}  // Class Film
