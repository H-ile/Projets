/*
 * ja40 : création de la classe Voiture
 */
package java41;

/**
 *
 */
public class Java41 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Voiture voiture;
        voiture = new Voiture("renault");
        voiture.couleur="vert";
        voiture.nom = "la caisse à savon";
        voiture.marque = "Volkswagen";
        voiture.modele = "Polo 7";
        voiture.demarrer();
        voiture.avancer(10);
        voiture.arreter();
        voiture.afficher();
        
        Voiture voiture1 = new Voiture("mergez");
        voiture1.couleur="noir";
        voiture1.nom = "Merguez";
        voiture1.marque = "Renault";
        voiture1.modele = "Senic F1";
        voiture1.demarrer();
        voiture1.avancer(100);
        voiture1.arreter();
        voiture1.afficher();
    }

}  // class Ja40