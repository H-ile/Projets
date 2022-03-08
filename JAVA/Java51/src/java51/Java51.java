/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java51;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Java51 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Personne personne = new Personne("Wall", "E");
        System.out.println(personne.get_nom_complet());

        Personne personne1 = new Personne();
        System.out.println(personne1.get_nom_complet());

        Personne personne2 = new Personne("hal", "le_cafard");
        System.out.println(personne2.get_nom_complet());
        ArrayList<Personne> personnetab = new ArrayList<Personne>();
        personnetab.add(personne);
        personnetab.add(personne1);
        personnetab.add(personne2);

        System.out.println(personnetab.size()); // Affiche 7
        // Boucle avec for
        for (int i = 0; i < personnetab.size(); i++) {
            System.out.println(personnetab.get(i).get_nom_complet());
        }
        // Boucle avec for(each)
        for (Personne personnes : personnetab) {
            System.out.println(personnes.get_nom_complet());
        }
    }

}
