/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java53;

/**
 *
 * @author MA500484
 */
public class Java53 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Boisson boisson1 = new Boisson("Perrier", 1.0);
        boisson1.set_est_alcoolise(false);
        boisson1.set_categorie("eau");
        boisson1.afficher();
        Boisson boisson2 = new Boisson("Cabernet", 0.75);
        boisson2.set_est_alcoolise(true);
        boisson2.set_categorie("vin");
        boisson2.afficher();
        Boisson boisson3 = new Boisson("Multifruits", 1.5);
        boisson3.set_est_alcoolise(false);
        boisson3.set_categorie("jus");
        boisson3.afficher();
        Boisson boisson4 = new Boisson("Corona", 0.33);
        boisson4.set_est_alcoolise(true);
        boisson4.set_categorie("biere"); // Erreur
        boisson4.set_contenance(-10.0); // Erreur
        boisson4.afficher();
    }

}
