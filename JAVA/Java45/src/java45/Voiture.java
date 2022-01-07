/*
 * Classe Voiture
 *
 */
package java45;

/**
 *
 * @author jef
 */
public class Voiture {

    private String couleur;
    private String marque;
    private String modele;
    private Integer compteur = 0;
    private Boolean demarre = false;  // false=arrêté, true=démarré

    // Constructeur
    public Voiture(String couleur, String marque, String modele) {
        setCouleur(couleur);
        setMarque(marque);
        setModele(modele);
    }
     public Voiture() {
        setCouleur("blanc");
        setMarque("dacia");
        setModele("cendero suplement tacos");
    }
    

    // Getter et setter
    public String getCouleur() {
        return couleur;
    }

    public void setCouleur(String couleur) {
        if (couleur.equals("bleu") || couleur.equals("blanc") || couleur.equals("rouge")) {
            this.couleur = couleur;
        } else {
            System.out.println("La couleur doit être bleu, blanc ou rouge : " + couleur);
        }
    }

    public String getMarque() {
        return marque;
    }

    public void setMarque(String marque) {
        if (marque.equals("Renault") || marque.equals("Dacia")) {
            this.marque = marque;
        } else {
            System.out.println("La marque doit être Renault ou Dacia : " + marque);
        }
    }

    public String getModele() {
        return modele;
    }

    public void setModele(String modele) {
        this.modele = modele;
    }

    public Integer getCompteur() {
        return compteur;
    }

    public void setCompteur(Integer km) {
        if (km > 0) {
            this.compteur += km;
        } else {
            System.out.println("Pas de valeur négative pour le compteur : " + km);
        }
    }

    public Boolean isDemarre() {
        return demarre;
    }

    public void setDemarre(Boolean Demarre) {
        this.demarre = Demarre;
    }

    public void demarrer() {
        setDemarre(true);
    }

    public void avancer(Integer km) {
        setCompteur(km);
    }

    public void arreter() {
        setDemarre(false);
    }

    public void afficher() {
        System.out.println("-- Infos sur la voiture --");
        System.out.println("Couleur : " + couleur);
        System.out.println("Marque : " + marque);
        System.out.println("Modèle : " + modele);
        System.out.println("Compteur : " + compteur);
        System.out.println("Moteur démarré ? : " + demarre);
    }

    public void changer_etat() {
        demarre = !demarre;
    }

    

}  // class Voiture
