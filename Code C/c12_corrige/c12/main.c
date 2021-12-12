//
// c12
// calcul de TVA
#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

  // Variables(s)
  double montantHT = 0;
  double montantTTC = 0;
  double tva = 0;
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

  // Identification du taux
  switch(choix) {
  case 1 :
    tva=20;
    break;
  case 2 :
    tva=10;
    break;
  case 3 :
    tva=5.5;
    break;
  case 4 :
    tva=2.1;
    break;
  default:
    printf("- Erreur, votre choix n'est pas correct -\n");
    tva=0;
  }

  if (tva !=0) {
    // Calcul TTC
    montantTTC = montantHT + (montantHT*(tva/100));

    // Affichage des résultats
    printf(" --- Resultats ---\n");
    printf("Montant HT  = %.2lf\n",montantHT);
    printf("Taux TVA    = %.2lf\n",tva);
    printf("Montant TTC = %.2lf\n",montantTTC);
  }

  // Fin
  printf("\nThat's all folks\n");
  return 0;
}
