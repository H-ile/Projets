/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java11;
import java.util.Scanner;
/**
 *
 * @author MA500484
 */
public class Java11 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int cote;
        String libelle;
        Scanner clavier = new Scanner(System.in);
        System.out.println("Saisissez un nombre : ");
        cote = clavier.nextInt();
        System.out.println(" --- Resultats ---\n");
        switch (cote) {
        case 3: libelle = "triangle";
        break;
        case 4: libelle = "Quadrilatère";
        break;
        case 5: libelle = "Pentagone";
        break;
        case 8: libelle = "Octogone";
        break;
        case 12: libelle = "Dodécagone";
        break;
        default: libelle = "Inconnu ???";
        }
        System.out.println(libelle);
            
        }
    }
    

