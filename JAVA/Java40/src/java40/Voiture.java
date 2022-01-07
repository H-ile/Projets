/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java40;

/**
 *
 * @author MA500484
 */
public class Voiture {

    String marque;
    String modele;
    String nom;
    int compteur = 0;
    boolean demarre = false;
        
    public void demarrer() {
        demarre = true;

        System.out.println("la voiture a demarré");
    }

    public void avancer(int km) {
        if (demarre == true) {
            compteur = compteur + km;
            System.out.println("la voiture a parcouru" + km);
        } else {
            System.out.println("il faut demarrer la voiture avant !");
        }
    }

    public void arreter() {
        demarre = false;

        System.out.println("la voiture c'est arréte");
    }

    public void afficher() {
        if (demarre) {
            String lib = "oui";
        } else {
            String lib = "non";
        }
        System.out.println("-- information de la voiture --");
        System.out.println("marque: "+ marque);
        System.out.println("modele: "+ modele);
        System.out.println("compteur"+compteur);
        System.out.println("moteur demarrer ? "+demarre);
        
    }
}
