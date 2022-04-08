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
        
        Vin vin1 = new Vin("Cabernet", 0.75, "rosé");
        vin1.set_est_alcoolise(true);
        vin1.set_categorie("vin");
        vin1.afficher();
        
        Vin vin2 = new Vin("Monastrell", 0.75, "noir"); // Erreur
        vin2.set_est_alcoolise(true);
        vin2.set_categorie("vin");
        vin2.afficher();
        
        Jus jus1 = new Jus("Jus d'ananas", 0.5, "ananas");
        jus1.set_est_alcoolise(false);
        jus1.set_categorie("jus");
        jus1.afficher();

        Jus jus2 = new Jus("Jus de canneberges", 1.5, "canneberges");
        jus2.set_est_alcoolise(false);
        jus2.set_categorie("jus");
        jus2.set_emballage(2); // bouteille verre
        jus2.afficher();
        
        Jus jus3 = new Jus("Jus de citron", 2.5, "citron");
        jus3.set_est_alcoolise(false);
        jus3.set_categorie("jus");  
        jus2.set_emballage(99); // Er
    }

}
