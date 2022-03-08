/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java51;

/**
 *
 * @author MA500484
 */
public class Personne {
    // Propriétés

    public String nom;
    public String prenom;
// Constructeur

    Personne(String prenom, String nom) {
        this.prenom = prenom;
        this.nom = nom;
    }

    Personne() {
        set_nom("macqueen");
        set_prenom("flash");
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
