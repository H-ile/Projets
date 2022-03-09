/**
 * Terminator
 * Source : https://en.wikipedia.org/wiki/Terminator_(franchise)
 */
package java52;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Java52 {

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
        System.out.println("-> Affichage des libellés des trois premiers films");
        System.out.println(terminator1.get_libelle());
        System.out.println(terminator2.get_libelle());
        System.out.println(terminator3.get_libelle());

        // Création d'une collection de terminators
        ArrayList<Film> lesTerminators = new ArrayList<Film>();

        lesTerminators.add(terminator1);
        lesTerminators.add(terminator2);
        lesTerminators.add(terminator3);
        lesTerminators.add(terminator4);
        lesTerminators.add(terminator5);
        lesTerminators.add(terminator6);

        System.out.println("");
        System.out.println("-> Affichage du contenu de la collection");
        for (Film unTerminator : lesTerminators) {
            System.out.println(unTerminator.get_titre());
        }

        System.out.println("");
        System.out.println("Il y a " + lesTerminators.size() + " film(s) Terminator dans cette collection");

    }
}