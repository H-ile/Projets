package java53;

public class Vin extends Boisson {

     // Propriétés
     private String couleur;

     // Constructeur(s)
     public Vin(String nom, Double contenance, String couleur) {
         super(nom, contenance);
         set_couleur(couleur);
 
     }
 
     // Getters et Setter
     public String get_couleur() {
         return couleur;
     }
 
     public final void set_couleur(String couleur) {
         if (couleur.equals("rouge") || couleur.equals("rosé") || couleur.equals("blanc")) {
             this.couleur = couleur;
         } else {
             System.out.println("Erreur : la couleur doit être rouge, rosé ou blanc : " + couleur);
         }
     }
 
     @Override
     public void afficher() {
         super.afficher();
         System.out.println("couleur     : " + couleur);
     }
 
}
