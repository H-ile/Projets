/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java54_controle;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Pays {
    private String nom;
    private String code;
    private String capitale;
    private String monaie;
    private ArrayList langues;
    
    
    
    // Constructeur sans paramètre
    
    Pays() {
        this.nom = "???";
        this.code = "???";
        this.capitale = "???";
        this.monaie = "???";
        langues = new ArrayList<Langue>();
    }
    
    Pays(String nom, String code, String capitale) {
        this.nom = nom;
        this.code = code;
        this.capitale = capitale;
        langues = new ArrayList<Langue>();
    }

    Pays(String nom, String code, String capitale, String monaie) {
        this.nom = nom;
        this.code = code;
        this.capitale = capitale;
        this.monaie = monaie;
    }

    // Getter
    public String get_nom() {
        return nom;
    }

    public String get_code() {
        return code;
    }

    public String get_capitale() {
        return capitale;
    }
    public String get_monaie() {
        return monaie;
    }
     //public ArrayList<Langue> get_langues() {
        //return langues;
    //}
   
    //Setter  
    public void set_nom(String nom) {
        this.nom = nom;
    }

    public void set_code(String code) {
        this.code = code;
    }

    public void set_capitale(String capitale) {
        this.capitale = capitale;
    }
    public void set_monaie(String monaie) {
        this.monaie = monaie;
    }
    public void set_langues(ArrayList<Langue> langues) {
        this.langues = langues;
    }
    
    // Ajoute un acteur à la collection des acteurs
    
    public void add_langues(Langue langues){
        this.langues.add(langues);
    }

   
    // Retourne le libellé complet du film
    public String get_libelle() {
        return this.nom + this.code + this.capitale + this.monaie ;
    }

    // Affiche les propriétés de l'objet
    public void afficher() {
        System.out.println("------------------ Contenu ------------------");
        System.out.println(" nom       : " + this.nom);
        System.out.println(" code : " + this.code);
        System.out.println(" capitale       : " + this.capitale);
        System.out.println(" monaie       : " + this.monaie);
        System.out.println(" langues(s)   : ");
        
        if (langues.size() > 0) {
            for (Langue unelangue : this.get_langues()) {
                System.out.println("   * "+ unelangue.get_nom_complet());
            }
        } else {
            System.out.println("  - Aucun - ");
        }

    }
}  // Class Pays
