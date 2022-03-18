package Java52b;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Java52b {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        // Création des Terminator
        Film terminator1 = new Film("The Terminator", "James Cameron", "1984");
        Film terminator2 = new Film("Terminator 2: Judgment Day", "James Cameron", "1991");
        Film terminator3 = new Film("Terminator 3: Rise of the Machines", "Jonathan Mostow", "2003");
        Film terminator4 = new Film("Terminator Salvation", "Joseph McGinty Nichol", "2009");
        Film terminator5 = new Film("Terminator Genisys", "Alan Taylor", "2015");
        Film terminator6 = new Film("Terminator: Dark Fate", "Tim Miller", "2019");

        // Affichage des propriétés du premier film
        System.out.println("");
        System.out.println("-> Affichage des propriétés du premier film");
        terminator1.afficher();

        // Affichage des libellés des trois premiers films
        System.out.println("");
        System.out.println("-> Affichage des libellés des trois permiers films");
        System.out.println(terminator1.get_libelle());
        System.out.println(terminator2.get_libelle());
        System.out.println(terminator3.get_libelle());

        // Création des acteurs
        Acteur arnold = new Acteur("Arnold", "Schwarzenegger");
        Acteur linda = new Acteur("Linda", "Hamilton");
        Acteur michael = new Acteur("Michael", "Biehn");
        Acteur edward = new Acteur("Edward", "Furlong");

        // Création des collections d'acteurs par film
        terminator1.add_acteur(arnold);
        terminator1.add_acteur(linda);
        terminator1.add_acteur(michael);

        terminator2.add_acteur(arnold);
        terminator2.add_acteur(linda);
        terminator2.add_acteur(edward);

        terminator3.add_acteur(arnold);

        terminator4.add_acteur(arnold);

        terminator5.add_acteur(arnold);

        terminator6.add_acteur(arnold);
        terminator6.add_acteur(linda);

        // Création d'une collection de terminators
        ArrayList<Film> lesTerminators = new ArrayList<>();

        lesTerminators.add(terminator1);
        lesTerminators.add(terminator2);
        lesTerminators.add(terminator3);
        lesTerminators.add(terminator4);
        lesTerminators.add(terminator5);
        lesTerminators.add(terminator6);

        // Affichage de la collections de films+acteurs (double boucle)
        System.out.println("");
        System.out.println("-> Affichage du contenu de la collection (double boucle)");
        for (Film unTerminator : lesTerminators) {
            System.out.println(unTerminator.get_titre());
            System.out.println(" Acteur(s)");
            if (unTerminator.get_acteurs().size() > 0) {
                for (Acteur unActeur : unTerminator.get_acteurs()) {
                    System.out.println("   * " + unActeur.get_nom_complet());
                }
            } else {
                System.out.println("  - Aucun -");
            }
        }

        // Affichage de la collections de films+acteurs (méthode afficher())
        System.out.println("");
        System.out.println("-> Affichage du contenu de la collection (méthode afficher())");
        for (Film unTerminator : lesTerminators) {
           unTerminator.afficher();
        }

        System.out.println("");
        System.out.println("Il y a " + lesTerminators.size() + " film(s) Terminator dans cette collection");

    }
}
