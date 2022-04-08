package java53;

public class Jus extends Boisson {

    // Propriétés
    private String fruit;
    private int emballage; // 1=PET, 2=verre, 3=brique, 4=sachet

    // Constructeur(s)
    public Jus(String nom, Double contenance, String fruit) {
        super(nom, contenance);
        set_fruit(fruit);
        set_emballage(1);
    }

    public Jus(String nom, Double contenance) {
        super(nom, contenance);
        set_fruit("pomme");  // Par défaut
        set_emballage(1);
    }

    // Getters et Setter
    public String get_fruit() {
        return fruit;
    }

    public final void set_fruit(String fruit) {
        this.fruit = fruit;

    }

    public int get_emballage() {
        return emballage;
    }

    public String get_lib_emballage() {
        String libelle;
        switch (emballage) {
            case 1:
                libelle = "bouteille PET";
                break;
            case 2:
                libelle = "bouteille verre";
                break;
            case 3:
                libelle = "brique";
                break;
            case 4:
                libelle = "sachet à bouchon";
                break;
            default:
                libelle = "???";
        }
        return libelle;
    }

    public final void set_emballage(int emballage) {
        if (emballage == 1 || emballage == 2 || emballage == 3 || emballage == 4) {
            this.emballage = emballage;
        } else {
            System.out.println("Erreur : l'emballage doit être 1, 2 3 ou 4 : " + emballage);
        }

    }

    @Override
    public void afficher() {
        super.afficher();
        System.out.println("fruit     : " + fruit);
        System.out.println("emballage : " + get_lib_emballage());
    }
}