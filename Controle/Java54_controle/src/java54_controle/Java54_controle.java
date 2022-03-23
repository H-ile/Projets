/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java54_controle;

import java.util.ArrayList;

/**
 *
 * @author MA500484
 */
public class Java54_controle {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    

    // Création des pays
    Pays pays1 = new Pays("Allemagne", "DE", "Berlin", "euro");
    Pays pays2 = new Pays("Autriche", "AT", "Vienne", "euro");
    Pays pays3 = new Pays("Belgique", "BE", "Bruxelles", "euro");
    Pays pays4 = new Pays("Bulgarie", "BG", "Sofia", "lev");
    Pays pays5 = new Pays("Chypre", "CY", "Nicosie", "euro");
    Pays pays6 = new Pays("Danemark", "DK", "Copenhague", "couronne");
    Pays pays7 = new Pays("Espagne", "ES", "Madrid", "euro");
    Pays pays8 = new Pays("Estonie", "EE", "Tallinn", "euro");
    Pays pays9 = new Pays("Finlande", "FI", "Helsinki", "euro");
    Pays pays10 = new Pays("France", "FR", "Paris", "euro");
    Pays pays11 = new Pays("Grèce", "EL, GR", "Athènes", "euro");
    Pays pays12 = new Pays("Hongrie", "HU", "Budapest", "forint");
    Pays pays13 = new Pays("Irlande", "IE", "Dublin", "euro");
    Pays pays14 = new Pays("Italie", "IT", "Rome", "euro");
    Pays pays15 = new Pays("Lettonie", "LV", "Riga", "euro");
    Pays pays16 = new Pays("Lituanie", "LT", "Vilnius", "euro");
    Pays pays17 = new Pays("Luxembourg", "LU", "Luxembourg", "euro");
    Pays pays18 = new Pays("Malte", "MT", "La Valette", "euro");
    Pays pays19 = new Pays("Pays-Bas", "NL", "Amsterdam", "euro");
    Pays pays20 = new Pays("Pologne", "PL", "Varsovie", "złoty");
    Pays pays21 = new Pays("Portugal", "PT", "Lisbonne", "euro");
    Pays pays22 = new Pays("Tchéquie", "CZ", "Prague", "couronne");
    Pays pays23 = new Pays("Roumanie", "RO", "Bucarest", "leu");
    Pays pays24 = new Pays("Slovaquie", "SK", "Bratislava", "euro");
    Pays pays25 = new Pays("Slovénie", "SI", "Ljubljana", "euro");
    Pays pays26 = new Pays("Suède", "SE", "Stockholm", "couronne");

    // Affichage des propriétés du premier pays
    System.out.println ("");
    System.out.println ("-> Affichage des propriétés du premier pays");
    pays1.afficher();
    
    System.out.println("");
    System.out.println("-> Affichage des libellés des trois premiers pays");
    System.out.println(pays1.get_libelle());
    System.out.println(pays2.get_libelle());
    System.out.println(pays3.get_libelle());
    
    
    ArrayList<Pays> lespays = new ArrayList<Pays>();

        lespays.add(pays1);
        lespays.add(pays2);
        lespays.add(pays3);
        lespays.add(pays4);
        lespays.add(pays5);
        lespays.add(pays6);
        lespays.add(pays7);
        lespays.add(pays8);
        lespays.add(pays9);
        lespays.add(pays10);
        lespays.add(pays11);
        lespays.add(pays12);
        lespays.add(pays13);
        lespays.add(pays14);
        lespays.add(pays15);
        lespays.add(pays16);
        lespays.add(pays17);
        lespays.add(pays18);
        lespays.add(pays19);
        lespays.add(pays20);
        lespays.add(pays21);
        lespays.add(pays22);
        lespays.add(pays23);
        lespays.add(pays24);
        lespays.add(pays25);
        lespays.add(pays26);

        // Création des langues
        Langue bg = new Langue("bg", "bulgare");
        Langue cz = new Langue("cz", "tchèque");
        Langue da = new Langue("da", "danois");
        Langue de = new Langue("de", "allemand");
        Langue el = new Langue("el", "grec");
        Langue en = new Langue("en", "anglais");
        Langue es = new Langue("es", "espagnol");
        Langue et = new Langue("et", "estonien");
        Langue fi = new Langue("fi", "finnois");
        Langue fr = new Langue("fr","français");
        Langue ga = new Langue("ga", "irlandais");
        Langue hr = new Langue("Arnold", "Schwarzenegger");
        Langue hu = new Langue("Arnold", "Schwarzenegger");
        Langue it = new Langue("Arnold", "Schwarzenegger");
        Langue lb = new Langue("Arnold", "Schwarzenegger");
        Langue lt = new Langue("Arnold", "Schwarzenegger");
        Langue lv = new Langue("Arnold", "Schwarzenegger");
        Langue mt = new Langue("Arnold", "Schwarzenegger");
        Langue nl = new Langue("Arnold", "Schwarzenegger");
        Langue pl = new Langue("Arnold", "Schwarzenegger");
        Langue pt = new Langue("Arnold", "Schwarzenegger");
        Langue ro = new Langue("Arnold", "Schwarzenegger");
        Langue sk = new Langue("Arnold", "Schwarzenegger");
        Langue sl = new Langue("Arnold", "Schwarzenegger");
        Langue sv = new Langue("Arnold", "Schwarzenegger");
        Langue tr = new Langue("Arnold", "Schwarzenegger");
        
        //allmagne
        pays1.add_langues(de);
        
        //belgique
        pays2.add_langues(fr);
        pays2.add_langues(de);
        pays2.add_langues   (nl);

        
        
         // Affichage de la collections de films+acteurs (double boucle)
        System.out.println("");
        System.out.println("-> Affichage du contenu de la collection (double boucle)");
        for (Pays unPays : lespays) {
            System.out.println(unPays.get_nom());
            System.out.println(" langues(s)");
            if (unPays.get_langues().size() > 0) {
                for (Langue unActeur : unPays.get_langues()) {
                    System.out.println("   * " + unPays.get_libelle());
                }
            } else {
                System.out.println("  - Aucun -");
            }
        }

        // Affichage de la collections de films+acteurs (méthode afficher())
        System.out.println("");
        System.out.println("-> Affichage du contenu de la collection (méthode afficher())");
        for (Pays unPays : lespays) {
           unPays.afficher();
        }

        System.out.println("");
        System.out.println("Il y a " + lespays.size() + " film(s) Terminator dans cette collection");


    }
}