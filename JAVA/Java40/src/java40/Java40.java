/*
 * ja40 : création de la classe Voiture
 */
package java40;

/**
 *
 * @author jef
 */
public class Java40 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Voiture voiture = new Voiture();
        voiture.demarrer();
        voiture.afficher();
        voiture.avancer(10);
        voiture.afficher();
        voiture.arreter();
        voiture.afficher();
    }

}  // class Ja40