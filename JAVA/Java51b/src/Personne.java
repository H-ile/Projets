/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Java51b;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Personne {

    // Propriétés
    private String nom;
    private String prenom;
    private ArrayList enfants;

    // Constructeur sans paramètre
    Personne() {
        this.prenom = "???";
        this.nom = "???";
        enfants = new ArrayList<Enfant>();
    }

    // Constructeur avec paramètres
    Personne(String prenom, String nom) {
        this.prenom = prenom;
        this.nom = nom;
        enfants = new ArrayList<Enfant>();
    }
    // Getter

    public String get_nom() {
        return nom;
    }

    public void set_nom(String nom) {
        this.nom = nom;
    }
    // Setter

    public String get_prenom() {
        return prenom;
    }

    public void set_prenom(String prenom) {
        this.prenom = prenom;
    }

    public ArrayList<Enfant> get_enfants() {
        return enfants;
    }

    public void set_enfants(ArrayList<Enfant> enfants) {
        this.enfants = enfants;
    }

    // Retourne le prénom et le nom

    public String get_nom_complet() {
        return this.prenom + " " + this.nom;
    }
    // Ne retourne rien

    public void afficher() {
        System.out.println(this.prenom);
        System.out.println(this.nom);
    }
}