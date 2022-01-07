/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package java03;
import java.util.Scanner;
/**
 *
 * @author MA500484
 */
public class Java03 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        double temp1;
        double temp2;
        double temp3;
        double moy;
        
        Scanner clavier = new Scanner(System.in) ;
        System.out.println("Saisir température 1: " );
        temp1 = clavier.nextDouble();
        System.out.println("Saisir température 2: " );
        temp2 = clavier.nextDouble();
        System.out.println("Saisir température 3: " );
        temp3 = clavier.nextDouble();
        
        System.out.println("température 1: " + temp1);
        System.out.println("température 2: " + temp2);
        System.out.println("température 3: " + temp3);
        moy = (temp1+temp2+temp3)/3;
        
        System.out.printf("tepérature moyenne : %.2f \n", moy);
        
    }
    
}
