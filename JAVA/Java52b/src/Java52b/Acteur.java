/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Java52b;

/**
 *
 * @author ramiarj
 */
public class Acteur {

    // Propriétés
    
    private String prenom;
    private String nom;

    // Constructeur sans paramètre
    
    Acteur() {
        this.prenom = "???";
        this.nom = "???";
    }

    // Constructeur avec paramètres
    
    Acteur(String prenom, String nom) {
        this.prenom = prenom;
        this.nom = nom;

    }

    // Getter

    public String get_prenom() {
        return prenom;
    }
    
    public String get_nom() {
        return nom;
    }

    //Setter  
    
    public void set_prenom(String prenom) {
        this.prenom = prenom;
    }
    
    public void set_nom(String nom) {
        this.nom = nom;
    }

    // Retourne le prénom et le nom
    public String get_nom_complet() {
        return this.prenom + " " + this.nom;
    }
    
    // Affiche les propriétés de l'objet
    public void afficher() {
        System.out.println("");
        System.out.println("Prénom : " + this.prenom);
        System.out.println("Nom    : " + this.nom);
    }
    
}  // Class Film
