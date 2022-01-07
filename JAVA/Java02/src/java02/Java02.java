/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java02;
import java.util.Scanner;
/**
 *
 * @author MA500484
 */
public class Java02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        double nombre;
        Scanner clavier = new Scanner(System.in) ;
        System.out.println("Saisir montant en euros : " );
        nombre = clavier.nextDouble();
        System.out.println("Montant en euros : " + nombre);
        nombre = nombre/ 0.88351;
        System.out.printf("Montant en dollars : %.2f \n", nombre);
    }
    
}
