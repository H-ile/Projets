package java53;

/**
 *
 * @author MA500484
 */
public class Boisson {

    private String nom;
    private Double contenance;
    private String categorie;
    private boolean est_alcoolise;
   

    Boisson(String nom, double contenance) {
        this.nom = nom;
        this.contenance = contenance;
        this.categorie = "???";
        this.est_alcoolise = false;
    }

    // Getter
    public String get_nom() {
        return nom;
    }

    public Double get_contenance() {
        return contenance;
    }

    public String get_categorie() {
        return categorie;
    }

    public boolean get_est_alcoolise() {
        return est_alcoolise;
    }

    // Setter
    public void set_nom(String nom) {
        this.nom = nom;
    }

    public void set_contenance(Double contenance) {
        if (contenance > 0.0) {
            this.contenance = contenance;
        } else {
            this.contenance = 0.0;
        }
    }

    public void set_categorie(String categorie) {
        if (categorie.equals("jus") || categorie.equals("eau") || categorie.equals("vin")) {
            this.categorie = categorie;
        } else {
            this.categorie = "la categorie est invalide";
        }

    }

    public void set_est_alcoolise(boolean est_alcoolise) {
        this.est_alcoolise = est_alcoolise;
    }

    public String get_lib_est_alcoolise() {
        if (this.est_alcoolise == true) {
           return "oui";
        } else {
            return "non";
        }
    }

    public String get_lib_contenance() {
        return this.contenance + "" + "L";
    }

    public void afficher() {
        System.out.println("------------------ Contenu ------------------");
        System.out.println(" nom   : " + this.nom);
        System.out.println(" catégorie : " + this.categorie);
        System.out.println(" contenance en (litres)       : " + this.contenance + " " + "L");
        System.out.println(" la boisson est alcoolise  : " + get_lib_est_alcoolise());
    }

}
