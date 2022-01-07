/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java04;

import java.util.Scanner;

/**
 *
 * @author MA500484
 */
public class Java04 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int nombre = 0;
        int reste = 0;
        Scanner clavier = new Scanner(System.in);
        // Traitement(s)
        // Saisie
        System.out.println("Saisissez un nombre : ");
        nombre = clavier.nextInt();
        // Calcul de la parit�
        reste = nombre % 2;

        // Affichage des r�sultats
        System.out.println(" --- Resultats ---\n");
        if (reste != 0) {
            System.out.printf("%d est impair\n", nombre);
        } else {
           System.out.printf("%d est pair\n", nombre);
        }

    }

}
