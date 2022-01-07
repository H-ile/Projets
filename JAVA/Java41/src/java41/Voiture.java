/*
 * Classe Voiture
 *
 */
package java41;

/**
 *
 * @author jef
 */
public class Voiture {

    String couleur;
    String nom;
    String marque;
    String modele;
    Integer compteur = 10;
    Boolean demarre = false;  // false=arrêté, true=démarré

    public Voiture(String marque) {
        this.marque = marque;
    
    }

    public void demarrer() {
        demarre = true;
    }

    public void avancer(Integer km) {
        compteur = compteur + km;
    }

    public void arreter() {
        demarre = false;
    }

    public void afficher() {
        System.out.println("-- Infos sur la voiture --");
        System.out.println("Couleur : " + couleur);
        System.out.println("Couleur : " + nom);
        System.out.println("Marque : " + marque);
        System.out.println("Modèle : " + modele);
        System.out.println("Compteur : " + compteur);
        System.out.println("Moteur démarré ? : " + demarre);
    }
}  // Class Voiture
