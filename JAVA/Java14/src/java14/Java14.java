/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java14;

import java.util.Scanner;

/**
 *
 * @author MA500484
 */
public class Java14 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        double note = 0;
        double nombre = 0;
        double somme = 0;
        double mini = 0;
        double maxi = 0;
        double moyenne = 0;

        Scanner clavier = new Scanner(System.in);

        System.out.println("\n Entrez une note de 0 a 20 (-1 pour arreter) : ");
        note = clavier.nextDouble();
        mini = note;
        maxi = note;

        // Boucle de saisie
        while (note != -1) {
            // Denombrement et somme des notes
            nombre++;
            // Somme
            somme = somme + note;
            // Maj des minimums
            if (note < mini) {
                mini = note;
            }
            // Maj des maximums
            if (note > maxi) {
                maxi = note;

            }
       
        System.out.println("\n Entrez une note de 0 a 20 (-1 pour arreter) : ");
        note = clavier.nextDouble();
        }
        System.out.println("\n --- Résultats ---\n");
        if (nombre != 0) {
            // Calcul de la moyenne
            moyenne = somme / nombre;
            // Affichage des r�sultats
            System.out.printf(" Nombre  : "+ nombre);
            System.out.printf("\n somme : "+ somme);
            System.out.printf("\n Moyenne : "+ moyenne);
            System.out.printf("\n note la plus basse : "+ mini);
            System.out.printf("\n note la plus haute : "+ maxi);
            System.out.printf("\n");
        } else {
            System.out.printf("\n Pas de note !!!\n");
        }
    }
}
