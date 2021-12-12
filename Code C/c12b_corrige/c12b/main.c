//
// c12b
// calcul de TVA avec une fonction
#include <stdio.h>
#include <stdlib.h>
#include <math.h>


// Retourne un montant TTC à partir d'un montant HT et d'un code TVA
double calculerTVA(double montant, int codeTVA) {
  double taux = 0;
  double resultat = 0;

  // Identification du taux
  switch(codeTVA) {
  case 1 :
    taux=20;
    break;
  case 2 :
    taux=10;
    break;
  case 3 :
    taux=5.5;
    break;
  case 4 :
    taux=2.1;
    break;
  default:
    printf("- Erreur, votre choix n'est pas correct -\n");
    taux=0;
  }

  // Calcul TTC
  resultat = montant + (montant*(taux/100));

  // Retourne le résultat à l'appelant
  return resultat;
}

int main() {

  // Variables(s)
  double montantHT = 0;
  double montantTTC = 0;
  int choix=0;

  // Traitement(s)

  // Saisie du montant
  printf("Saisissez le montant HT : ");
  scanf("%lf",&montantHT);
  // Saisie du taux
  printf("1 : taux normal (20%%)\n");
  printf("2 : taux intermediaire (10%%)\n");
  printf("3 : taux reduit (5,5%%)\n");
  printf("4 : taux particulier (2,1%%)\n");
  printf("Choisissez un taux : ");
  scanf("%d",&choix);

  // Appele la fonction de calcul
  montantTTC = calculerTVA(montantHT,choix);

  // Affichage des résultats
  printf(" --- Resultats ---\n");
  printf("Montant HT  = %.2lf\n",montantHT);
  printf("Montant TTC = %.2lf\n",montantTTC);

// Fin
  printf("\nThat's all folks\n");
  return 0;
}
