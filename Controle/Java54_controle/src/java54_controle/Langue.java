/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java54_controle;

/**
 *
 * @author MA500484
 */
public class Langue {
   
    // Propriétés
    
    private String code;
    private String libelle;

    // Constructeur sans paramètre
    
    Langue() {
        this.code = "???";
        this.libelle = "???";
    }

    // Constructeur avec paramètres
    
    Langue(String code, String libelle) {
        this.code = code;
        this.libelle = libelle;

    }

    // Getter

    public String get_prelibelle() {
        return code;
    }
    
    public String get_libelle() {
        return libelle;
    }

    //Setter  
    
    public void set_code(String code) {
        this.code = code;
    }
    
    public void set_libelle(String libelle) {
        this.libelle = libelle;
    }

    // Retourne le prélibelle et le libelle
    public String get_nom_complet() {
        return this.code + " " + this.libelle;
    }
    
    // Affiche les propriétés de l'objet
    public void afficher() {
        System.out.println("");
        System.out.println("libelle : " + this.code);
        System.out.println("Nom    : " + this.libelle);
    }
    
}  // Class pays
 

