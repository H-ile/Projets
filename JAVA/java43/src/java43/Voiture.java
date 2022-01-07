/*
 * Classe Voiture
 *
 */
package java43;

/**
 *
 * @author jef
 */
public class Voiture {

    String couleur;
    private String marque;
    String modele;
    Integer compteur = 0;
    Boolean demarre = false;  // false=arrêté, true=démarré

    // constructeur
    public Voiture(String couleur, String marque, String modele) {
        this.couleur = couleur;
        //this.marque = marque;
        set_marque(marque);
        this.modele = modele;
    }

    public void set_marque(String marque) {
        if (marque.equals("Renault") || marque.equals("Dacia")) {
            this.marque = marque;
        } else {
            System.out.println("La marque doit être Renault ou Dacia");
        }
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
        System.out.println("Marque : " + marque);
        System.out.println("Modèle : " + modele);
        System.out.println("Compteur : " + compteur);
        System.out.println("Moteur démarré ? : " + demarre);
    }

} // class Voiture