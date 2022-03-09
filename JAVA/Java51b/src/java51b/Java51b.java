/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java51b;

import java.util.ArrayList;

/**
 *
 * @author ramiarj
 */
public class Java51b {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        // Création des personnes
        Personne personne1 = new Personne("jef", "rams");
        Personne personne2 = new Personne();
        Personne personne3 = new Personne();

        personne3.set_nom("Potter");
        personne3.set_prenom("Harry");

        // Ajoute des enfants
        ArrayList<Enfant> enfants = new ArrayList<Enfant>();
        Enfant enfant1 = new Enfant("Tom");
        Enfant enfant2 = new Enfant("Elsa");
        enfants.add(enfant1);
        enfants.add(enfant2);
        personne1.set_enfants(enfants);

        // Affichage
        System.out.println("-> Affichage des personnes");
        System.out.println(personne1.get_nom_complet());
        System.out.println(personne2.get_nom_complet());
        System.out.println(personne3.get_nom_complet());

        // Création d'une collection de personnes
        ArrayList<Personne> lesPersonnes = new ArrayList<Personne>();

        lesPersonnes.add(personne1);
        lesPersonnes.add(personne2);
        lesPersonnes.add(personne3);

        System.out.println("-> Affichage du contenu de la collection");
        for (Personne unePersonne : lesPersonnes) {
            System.out.println(unePersonne.get_nom());
            System.out.println(" Enfant(s)");
            if (unePersonne.get_enfants().size() > 0) {
                for (Enfant unEnfant : unePersonne.get_enfants()) {
                    System.out.println(unEnfant.getPrenom());
                }
            } else {
                System.out.println("  Aucun");
            }
        }

        System.out.println("Il y a " + lesPersonnes.size() + " personne(s) dans cette collection");

    }

}
